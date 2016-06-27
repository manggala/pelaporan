package android.trikarya.pelaporanpo;

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

public class PO extends AppCompatActivity {
    String[] sat = new String[]{"pilihan 1","pilihan 2","pilihan 3","pilihan 4"};
    Spinner soal1,soal2,soal3,soal4,soal5,soal6,soal7,soal8,soal9,soal10,
            soal11,soal12,soal13,soal14,soal15,soal16,soal17,soal18,soal19,soal20,
            soal21,soal22,soal23,soal24,soal25,soal26;
    EditText ket;
    int count=1;
    LinearLayout non,aktif;
    Button submit;
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
        ArrayAdapter arrayAdapter = new ArrayAdapter(this, R.layout.custom_spinner,sat);
        soal1.setAdapter(arrayAdapter);
        soal2.setAdapter(arrayAdapter);
        soal3.setAdapter(arrayAdapter);
        soal4.setAdapter(arrayAdapter);
        soal5.setAdapter(arrayAdapter);
        soal6.setAdapter(arrayAdapter);
        soal7.setAdapter(arrayAdapter);
        soal8.setAdapter(arrayAdapter);
        soal9.setAdapter(arrayAdapter);
        soal10.setAdapter(arrayAdapter);
        soal11.setAdapter(arrayAdapter);
        soal12.setAdapter(arrayAdapter);
        soal13.setAdapter(arrayAdapter);
        soal14.setAdapter(arrayAdapter);
        soal15.setAdapter(arrayAdapter);
        soal16.setAdapter(arrayAdapter);
        soal17.setAdapter(arrayAdapter);
        soal18.setAdapter(arrayAdapter);
        soal19.setAdapter(arrayAdapter);
        soal20.setAdapter(arrayAdapter);
        soal21.setAdapter(arrayAdapter);
        soal22.setAdapter(arrayAdapter);
        soal23.setAdapter(arrayAdapter);
        soal24.setAdapter(arrayAdapter);
        soal25.setAdapter(arrayAdapter);
        soal26.setAdapter(arrayAdapter);
        ket = (EditText) findViewById(R.id.ket);
        submit = (Button) findViewById(R.id.submit);
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
                else{
                    //upload
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
}
