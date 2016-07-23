package android.trikarya.pelaporanpo;

import android.app.AlertDialog;
import android.content.DialogInterface;
import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.TextView;
import android.widget.Toast;

import master.GetAllDataCallback;
import master.ServerRequest;
import master.User;

public class Dashboard extends AppCompatActivity {

    DatabaseHandler databaseHandler;
    User user;
    ServerRequest serverRequest;
    private String PROJECT_NUMBER = "221493802077";
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_dashboard);
        databaseHandler = new DatabaseHandler(this);
        if(databaseHandler.getUserCount() == 0)
            startActivity(new Intent(this,Login.class));
        else {
            user = databaseHandler.getUser();
            if (user.getStatus() == 0) {
                GCMClientManager pushClientManager = new GCMClientManager(this, PROJECT_NUMBER);
                pushClientManager.registerIfNeeded(new GCMClientManager.RegistrationCompletedHandler() {
                    @Override
                    public void onSuccess(String registrationId, boolean isNewRegistration) {
                        if(isNewRegistration)
                            databaseHandler.createKonfigurasi(1);
                        getData(0);
                        if(registrationId != null) {
                            user.setStatus(1);
                            databaseHandler.updateUser(user);
                        }
                    }

                    @Override
                    public void onFailure(String ex) {
                        super.onFailure(ex);
                    }
                });
            }
        }
    }
    private void getData(int status)
    {
        Toast.makeText(this, "Getting data from server, please wait",
                Toast.LENGTH_LONG).show();
        serverRequest = new ServerRequest(this);
        if(status == 0) {
            serverRequest.getRiwayat(this, new GetAllDataCallback() {
                @Override
                public void Done(String message) {
                    if (!message.equals("success"))
                        showError(message);
                }
            });
        }
    }
    private void showError(String messsage) {
        AlertDialog.Builder alert = new AlertDialog.Builder(this);
        alert.setMessage(messsage);
        alert.setPositiveButton("Try Again", new DialogInterface.OnClickListener() {
            @Override
            public void onClick(DialogInterface dialog, int which) {
                getData(0);
            }
        });
        alert.show();
    }
    public void pilihMenu(View v){
        Intent intent;
        if(v.getId()==R.id.po)
            intent = new Intent(this,PO.class);
        else if (v.getId()==R.id.nm)
            intent = new Intent(this,NearMiss.class);
        else if (v.getId()==R.id.riwayat)
            intent = new Intent(this,Riwayat.class);
        else {
            databaseHandler.deleteUser();
            databaseHandler.deleteRiwayat();
            intent = new Intent(this,SplashScreen.class);
        }
        startActivity(intent);
        finish();
    }
}
