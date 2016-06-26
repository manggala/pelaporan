package android.trikarya.pelaporanpo;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;

public class Dashboard extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_dashboard);
    }
    public void pilihMenu(View v){
        Intent intent;
        if(v.getId()==R.id.po)
            intent = new Intent(this,PO.class);
        else if (v.getId()==R.id.nm)
            intent = new Intent(this,NearMiss.class);
        else {
            DatabaseHandler databaseHandler = new DatabaseHandler(this);
            databaseHandler.deleteUser();
            intent = new Intent(this,SplashScreen.class);
        }
        startActivity(intent);
        finish();
    }
}
