package android.trikarya.pelaporanpo;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;

public class SplashScreen extends AppCompatActivity {
    Intent intent;
    DatabaseHandler databaseHandler;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_splash_screen);
        databaseHandler = new DatabaseHandler(this);
        Thread timerThread = new Thread(){
            public void run(){
                try{
                    sleep(1500);
                }catch(InterruptedException e){
                    e.printStackTrace();
                }finally{
                    if(databaseHandler.getUserCount() == 0)
                        intent = new Intent(SplashScreen.this,Login.class);
                    else
                        intent = new Intent(SplashScreen.this,Dashboard.class);
                    startActivity(intent);
                }

            }
        };
        timerThread.start();
    }
    @Override
    protected void onPause() {
        // TODO Auto-generated method stub
        super.onPause();
        finish();
    }
}
