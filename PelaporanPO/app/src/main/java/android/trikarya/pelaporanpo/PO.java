package android.trikarya.pelaporanpo;

import android.app.AlertDialog;
import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.MenuItem;
import android.view.View;
import android.widget.ArrayAdapter;
import android.widget.Button;
import android.widget.EditText;
import android.widget.LinearLayout;
import android.widget.Spinner;
import android.widget.Toast;

import java.text.DateFormatSymbols;
import java.util.Calendar;

import master.PreOperation;
import master.ServerRequest;
import master.StoreDataCallback;

public class PO extends AppCompatActivity {
    String[] pilihan_1_2_3_24_25 = new String[]{"Maksimum","Minimum sampai Maksimum","Minimum","Kerusakan / Trouble"};
    String[] pilihan_4 = new String[]{"Full","Empty","Kerusakan / Trouble"};
    String[] pilihan_5 = new String[]{"Kencang","Tidak Kencang","Kerusakan / Trouble"};
    String[] pilihan_6_17 = new String[]{"Menyala Semua","Menyala Sebagian","Kerusakan / Trouble"};
    String[] pilihan_7 = new String[]{"Terukur Semua","Terukur Sebagian","Kerusakan / Trouble"};
    String[] pilihan_8 = new String[]{"Bunyi Keras","Bunyi Sedang","Kerusakan / Trouble"};
    String[] pilihan_9 = new String[]{"Tidak terdapat 'Error Code'","Terdapat 'Error Code'","Kerusakan / Trouble"};
    String[] pilihan_10_13 = new String[]{"Tinggi","Sedang","Rendah","Kerusakan / Trouble"};
    String[] pilihan_11 = new String[]{"Indikator tidak Menyala","Indikator Menyala","Kerusakan / Trouble"};
    String[] pilihan_12 = new String[]{"Ringan","Berat","Kerusakan / Trouble"};
    String[] pilihan_14 = new String[]{"Tidak ada suara (Normal)","Ada suara gesekan","Kerusakan / Trouble"};
    String[] pilihan_15 = new String[]{"Bersih, tidak pekat","Cukup kotor, agak pekat","Kotor, hitam pekat","Kerusakan / Trouble"};
    String[] pilihan_16 = new String[]{"Tidak terdapat tetesan","Terdapat tetesan air / rembesan air","Kerusakan / Trouble"};
    String[] pilihan_18 = new String[]{"Air telah kosong","Air masih ada / Tidak bisa hilang","Kerusakan / Trouble"};
    String[] pilihan_19 = new String[]{"Maksimum","Kurang angin","Kerusakan / Trouble"};
    String[] pilihan_20_21_22_23 = new String[]{"Sesuai / Berfungsi","Tidak berfungsi dengan baik","Kerusakan / Trouble"};
    String[] pilihan_26 = new String[]{"Menyala terang","Menyala redup","Kerusakan / Trouble"};
    Spinner soal1,soal2,soal3,soal4,soal5,soal6,soal7,soal8,soal9,soal10,
            soal11,soal12,soal13,soal14,soal15,soal16,soal17,soal18,soal19,soal20,
            soal21,soal22,soal23,soal24,soal25,soal26;
    EditText ket,headTruck,shift,tanggal,hourMeter,kilometer;
    int count=1;
    LinearLayout non,aktif;
    Button submit;
    Calendar calendar;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_po);
        soal1 = (Spinner) findViewById(R.id.sp_no1);
        soal2 = (Spinner) findViewById(R.id.sp_no2);
        soal3 = (Spinner) findViewById(R.id.sp_no3);
        soal4 = (Spinner) findViewById(R.id.sp_no4);
        soal5 = (Spinner) findViewById(R.id.sp_no5);
        soal6 = (Spinner) findViewById(R.id.sp_no6);
        soal7 = (Spinner) findViewById(R.id.sp_no7);
        soal8 = (Spinner) findViewById(R.id.sp_no8);
        soal9 = (Spinner) findViewById(R.id.sp_no9);
        soal10 = (Spinner) findViewById(R.id.sp_no10);
        soal11 = (Spinner) findViewById(R.id.sp_no11);
        soal12 = (Spinner) findViewById(R.id.sp_no12);
        soal13 = (Spinner) findViewById(R.id.sp_no13);
        soal14 = (Spinner) findViewById(R.id.sp_no14);
        soal15 = (Spinner) findViewById(R.id.sp_no15);
        soal16 = (Spinner) findViewById(R.id.sp_no16);
        soal17 = (Spinner) findViewById(R.id.sp_no17);
        soal18 = (Spinner) findViewById(R.id.sp_no18);
        soal19 = (Spinner) findViewById(R.id.sp_no19);
        soal20 = (Spinner) findViewById(R.id.sp_no20);
        soal21 = (Spinner) findViewById(R.id.sp_no21);
        soal22 = (Spinner) findViewById(R.id.sp_no22);
        soal23 = (Spinner) findViewById(R.id.sp_no23);
        soal24 = (Spinner) findViewById(R.id.sp_no24);
        soal25 = (Spinner) findViewById(R.id.sp_no25);
        soal26 = (Spinner) findViewById(R.id.sp_no26);
        soal1.setAdapter(new ArrayAdapter(this, R.layout.custom_spinner,pilihan_1_2_3_24_25));
        soal2.setAdapter(new ArrayAdapter(this, R.layout.custom_spinner,pilihan_1_2_3_24_25));
        soal3.setAdapter(new ArrayAdapter(this, R.layout.custom_spinner,pilihan_1_2_3_24_25));
        soal4.setAdapter(new ArrayAdapter(this, R.layout.custom_spinner,pilihan_4));
        soal5.setAdapter(new ArrayAdapter(this, R.layout.custom_spinner,pilihan_5));
        soal6.setAdapter(new ArrayAdapter(this, R.layout.custom_spinner,pilihan_6_17));
        soal7.setAdapter(new ArrayAdapter(this, R.layout.custom_spinner,pilihan_7));
        soal8.setAdapter(new ArrayAdapter(this, R.layout.custom_spinner,pilihan_8));
        soal9.setAdapter(new ArrayAdapter(this, R.layout.custom_spinner,pilihan_9));
        soal10.setAdapter(new ArrayAdapter(this, R.layout.custom_spinner,pilihan_10_13));
        soal11.setAdapter(new ArrayAdapter(this, R.layout.custom_spinner,pilihan_11));
        soal12.setAdapter(new ArrayAdapter(this, R.layout.custom_spinner,pilihan_12));
        soal13.setAdapter(new ArrayAdapter(this, R.layout.custom_spinner,pilihan_10_13));
        soal14.setAdapter(new ArrayAdapter(this, R.layout.custom_spinner,pilihan_14));
        soal15.setAdapter(new ArrayAdapter(this, R.layout.custom_spinner,pilihan_15));
        soal16.setAdapter(new ArrayAdapter(this, R.layout.custom_spinner,pilihan_16));
        soal17.setAdapter(new ArrayAdapter(this, R.layout.custom_spinner,pilihan_6_17));
        soal18.setAdapter(new ArrayAdapter(this, R.layout.custom_spinner,pilihan_18));
        soal19.setAdapter(new ArrayAdapter(this, R.layout.custom_spinner,pilihan_19));
        soal20.setAdapter(new ArrayAdapter(this, R.layout.custom_spinner,pilihan_20_21_22_23));
        soal21.setAdapter(new ArrayAdapter(this, R.layout.custom_spinner,pilihan_20_21_22_23));
        soal22.setAdapter(new ArrayAdapter(this, R.layout.custom_spinner,pilihan_20_21_22_23));
        soal23.setAdapter(new ArrayAdapter(this, R.layout.custom_spinner,pilihan_20_21_22_23));
        soal24.setAdapter(new ArrayAdapter(this, R.layout.custom_spinner,pilihan_1_2_3_24_25));
        soal25.setAdapter(new ArrayAdapter(this, R.layout.custom_spinner,pilihan_1_2_3_24_25));
        soal26.setAdapter(new ArrayAdapter(this, R.layout.custom_spinner,pilihan_26));
        ket = (EditText) findViewById(R.id.ket);
        headTruck = (EditText) findViewById(R.id.headTruck);
        shift = (EditText) findViewById(R.id.shift);
        tanggal = (EditText) findViewById(R.id.tanggal);
        hourMeter = (EditText) findViewById(R.id.hourMeter);
        kilometer = (EditText) findViewById(R.id.kilometer);
        submit = (Button) findViewById(R.id.submit);
        calendar = Calendar.getInstance();
        tanggal.setText(String.valueOf(calendar.get(Calendar.DAY_OF_MONTH)) + " " +
                new DateFormatSymbols().getMonths()[calendar.get(Calendar.MONTH)] + " " + String.valueOf(calendar.get(Calendar.YEAR)));
    }
    public void OnClick(View view){
        switch (view.getId()){
            case R.id.submit:
                if(count < 4) {
                    count++;
                    String tutup = "po_soal" + String.valueOf(count - 1);
                    String buka = "po_soal" + String.valueOf(count);
                    non = (LinearLayout) findViewById(getResources().getIdentifier(tutup, "id", getPackageName()));
                    non.setVisibility(View.GONE);
                    aktif = (LinearLayout) findViewById(getResources().getIdentifier(buka, "id", getPackageName()));
                    aktif.setVisibility(View.VISIBLE);
                    if(count == 4)
                        submit.setText("Submit");
                }
                else if(count == 4){
                    String tgl = String.valueOf(calendar.get(calendar.YEAR)) + "-" + String.valueOf(calendar.get(calendar.MONTH) + 1) + "-" + String.valueOf(calendar.get(calendar.DAY_OF_MONTH));
                    ServerRequest serverRequest = new ServerRequest(this);
                    serverRequest.storePO(this, new PreOperation(headTruck.getText().toString(), shift.getText().toString(), tgl, hourMeter.getText().toString(), kilometer.getText().toString(),
                            soal1.getSelectedItem().toString(), soal2.getSelectedItem().toString(), soal3.getSelectedItem().toString(), soal4.getSelectedItem().toString(), soal5.getSelectedItem().toString(),
                            soal6.getSelectedItem().toString(), soal7.getSelectedItem().toString(), soal8.getSelectedItem().toString(), soal9.getSelectedItem().toString(), soal10.getSelectedItem().toString(),
                            soal11.getSelectedItem().toString(), soal12.getSelectedItem().toString(), soal13.getSelectedItem().toString(), soal14.getSelectedItem().toString(), soal15.getSelectedItem().toString(),
                            soal16.getSelectedItem().toString(), soal17.getSelectedItem().toString(), soal18.getSelectedItem().toString(), soal19.getSelectedItem().toString(), soal20.getSelectedItem().toString(),
                            soal21.getSelectedItem().toString(), soal22.getSelectedItem().toString(), soal23.getSelectedItem().toString(), soal24.getSelectedItem().toString(), soal25.getSelectedItem().toString(),
                            soal26.getSelectedItem().toString(), ket.getText().toString()), new StoreDataCallback() {
                        @Override
                        public void Done(String status) {
                            if(status.equals("sukses")) {
                                Toast.makeText(PO.this, "Upload Data Sukses", Toast.LENGTH_LONG).show();
                                startActivity(new Intent(PO.this,Dashboard.class));
                                finish();
                            }
                            else
                                showError();

                        }
                    });
                }
                break;
            default:
                if(count > 1) {
                    count--;
                    String tutup = "po_soal" + String.valueOf(count + 1);
                    String buka = "po_soal" + String.valueOf(count);
                    non = (LinearLayout) findViewById(getResources().getIdentifier(tutup, "id", getPackageName()));
                    non.setVisibility(View.GONE);
                    aktif = (LinearLayout) findViewById(getResources().getIdentifier(buka, "id", getPackageName()));
                    aktif.setVisibility(View.VISIBLE);
                    if(count == 3)
                        submit.setText("Next");
                }
                else{
                    onBackPressed();
                }
                break;
        }
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
    private void showError() {
        AlertDialog.Builder alert = new AlertDialog.Builder(this);
        alert.setMessage("Upload data gagal !");
        alert.setPositiveButton("Try Again", null);
        alert.show();
    }
}
