package android.trikarya.pelaporanpo;

import android.app.Activity;
import android.app.AlertDialog;
import android.content.Intent;
import android.graphics.Bitmap;
import android.graphics.BitmapFactory;
import android.graphics.Matrix;
import android.net.Uri;
import android.os.Bundle;
import android.os.Environment;
import android.provider.MediaStore;
import android.support.v7.app.AppCompatActivity;
import android.util.Base64;
import android.view.MenuItem;
import android.view.View;
import android.widget.ArrayAdapter;
import android.widget.Button;
import android.widget.EditText;
import android.widget.ImageView;
import android.widget.Spinner;
import android.widget.Toast;

import java.io.ByteArrayOutputStream;
import java.io.File;
import java.io.IOException;
import java.text.DateFormatSymbols;
import java.text.SimpleDateFormat;
import java.util.Calendar;
import java.util.Date;

import master.Nearmiss;
import master.RiwayatModel;
import master.ServerRequest;
import master.StoreDataCallback;

public class NearMiss extends AppCompatActivity {
    Calendar calendar;
    EditText nama,tanggal,lokasi,saksi,kerjaan,tahapan,detail_sebab;//,supervisi,tgSupervisi;
    Spinner penyebab;
    ImageView foto1,foto2;
    File photoFile = null;
    Bitmap bitmap;
    static final int REQUEST_TAKE_PHOTO = 1;
    String mCurrentPhotoPath,foto_1="",foto_2="",tgl;
    int counter;
    Button submit;
    String[] pilihan = new String[]{"Unsafe Action","Unsafe Condition","Lain - lain"};
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_near_miss);
        calendar = Calendar.getInstance();
        tgl = String.valueOf(calendar.get(calendar.YEAR)) + "-" + String.valueOf(calendar.get(calendar.MONTH) + 1) + "-" + String.valueOf(calendar.get(calendar.DAY_OF_MONTH));
        penyebab = (Spinner) findViewById(R.id.nm_penyebab);
        penyebab.setAdapter(new ArrayAdapter(this, R.layout.custom_spinner, pilihan));
        nama = (EditText) findViewById(R.id.nm_nama);
        tanggal = (EditText) findViewById(R.id.nm_tgl);
        tanggal.setText(String.valueOf(calendar.get(Calendar.DAY_OF_MONTH)) + " " +
                new DateFormatSymbols().getMonths()[calendar.get(Calendar.MONTH)] + " " + String.valueOf(calendar.get(Calendar.YEAR)));
        lokasi = (EditText) findViewById(R.id.nm_lokasi);
        saksi = (EditText) findViewById(R.id.nm_saksi);
        kerjaan = (EditText) findViewById(R.id.nm_kerjaan);
        tahapan = (EditText) findViewById(R.id.nm_tahapan);
        detail_sebab = (EditText) findViewById(R.id.nm_detailsebab);
        /*supervisi = (EditText) findViewById(R.id.nm_supervisi);
        tgSupervisi = (EditText) findViewById(R.id.nm_supervisitgjwb);*/
        foto1 = (ImageView) findViewById(R.id.foto1);
        foto1.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                takePhoto(1);
            }
        });
        foto2 = (ImageView) findViewById(R.id.foto2);
        foto2.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                takePhoto(2);
            }
        });
        submit = (Button) findViewById(R.id.nm_submit);
        submit.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                if(!isEmpty(nama)&&!isEmpty(lokasi)&&!isEmpty(saksi)&&!isEmpty(kerjaan)&&!isEmpty(tahapan)&&!isEmpty(detail_sebab)&&!foto_1.equals("")&&!foto_2.equals("")){
                    Nearmiss nearmiss = new Nearmiss(tgl,lokasi.getText().toString(),saksi.getText().toString(),kerjaan.getText().toString(),
                            tahapan.getText().toString(),penyebab.getSelectedItem().toString(),detail_sebab.getText().toString(),foto_1,foto_2);
                    ServerRequest serverRequest = new ServerRequest(NearMiss.this);
                    serverRequest.storeNM(NearMiss.this, nearmiss, new StoreDataCallback() {
                        @Override
                        public void Done(String status, int id) {
                            if(status.equals("sukses")) {
                                Toast.makeText(NearMiss.this, "Upload Data Sukses", Toast.LENGTH_LONG).show();
                                DatabaseHandler databaseHandler = new DatabaseHandler(NearMiss.this);
                                databaseHandler.createRiwayat(new RiwayatModel(id, "Nearmiss", tgl, 0));
                                startActivity(new Intent(NearMiss.this,Dashboard.class));
                                finish();
                            }
                            else
                                showError();
                        }
                    });
                }
                else{
                    Toast.makeText(NearMiss.this,"Anda harus melengkapi semua isian",Toast.LENGTH_LONG).show();
                }
            }
        });
    }
    private void showError() {
        AlertDialog.Builder alert = new AlertDialog.Builder(this);
        alert.setMessage("Upload data gagal !");
        alert.setPositiveButton("Try Again", null);
        alert.show();
    }
    private boolean isEmpty(EditText etText) {
        return etText.getText().toString().trim().length() == 0;
    }
    private void takePhoto(int i) {
        Intent takePictureIntent = new Intent(MediaStore.ACTION_IMAGE_CAPTURE);
        if (takePictureIntent.resolveActivity(getPackageManager()) != null) {
            try {
                counter = i;
                String timeStamp = new SimpleDateFormat("yyyyMMdd_HHmmss").format(new Date());
                String imageFileName = String.valueOf(i)+"_" + timeStamp + "_";
                photoFile = createImageFile(imageFileName);
            } catch (IOException ex) {
                String err = ex.toString();
                int x = 0;
            }
            if (photoFile != null) {
                takePictureIntent.putExtra(MediaStore.EXTRA_OUTPUT,
                        Uri.fromFile(photoFile));
                startActivityForResult(takePictureIntent, REQUEST_TAKE_PHOTO);
            }

        }
    }
    private File createImageFile(String imageFileName) throws IOException {
        File storageDir = Environment.getExternalStoragePublicDirectory(
                Environment.DIRECTORY_PICTURES);
        File image = File.createTempFile(
                imageFileName,
                ".jpg",
                storageDir
        );

        mCurrentPhotoPath = image.getAbsolutePath();
        return image;
    }
    @Override
    public void onBackPressed() {
        startActivity(new Intent(this, Dashboard.class));
        finish();
    }
    @Override
    public boolean onOptionsItemSelected(MenuItem item) {
        switch (item.getItemId()) {
            case android.R.id.home:
                onBackPressed();
                return true;
        }
        return super.onOptionsItemSelected(item);
    }

    @Override
    protected void onActivityResult(int requestCode, int resultCode, Intent data) {
        if(requestCode == 1) {
            if(resultCode == Activity.RESULT_OK) {
                if(counter == 1)
                    foto_1 = getStringImage();
                else if(counter == 2)
                    foto_2 = getStringImage();
            }
        }
    }
    public String getStringImage(){
        Bitmap tmp = BitmapFactory.decodeFile(mCurrentPhotoPath);
        int height = 900,width = 600;
        if(tmp.getWidth() > tmp.getHeight()){
            width = 900;
            height = 600;
        }
        bitmap = getResizedBitmap(tmp,width,height);
        if(counter == 1)
            foto1.setImageBitmap(bitmap);
        else if(counter == 2)
            foto2.setImageBitmap(bitmap);
        ByteArrayOutputStream baos = new ByteArrayOutputStream();
        bitmap.compress(Bitmap.CompressFormat.JPEG, 50, baos);
        byte[] imageBytes = baos.toByteArray();
        String encodedImage = Base64.encodeToString(imageBytes, Base64.DEFAULT);
        return encodedImage;
    }
    public Bitmap getResizedBitmap(Bitmap bm, int newWidth, int newHeight) {
        int width = bm.getWidth();
        int height = bm.getHeight();
        float scaleWidth = ((float) newWidth) / width;
        float scaleHeight = ((float) newHeight) / height;
        Matrix matrix = new Matrix();
        matrix.postScale(scaleWidth, scaleHeight);
        Bitmap resizedBitmap = Bitmap.createBitmap(
                bm, 0, 0, width, height, matrix, false);
        bm.recycle();
        return resizedBitmap;
    }
}
