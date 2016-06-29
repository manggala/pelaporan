package android.trikarya.pelaporanpo;

import android.app.AlertDialog;
import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.EditText;

import master.GetUserCallback;
import master.ServerRequest;
import master.User;

public class Login extends AppCompatActivity {
    EditText username,pass;
    DatabaseHandler databaseHandler;
    User user;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_login);
        username = (EditText) findViewById(R.id.username);
        pass = (EditText) findViewById(R.id.password);
        databaseHandler = new DatabaseHandler(this);
    }
    private void authenticateUser(final User user) {
        ServerRequest serverRequest = new ServerRequest(this);
        serverRequest.fetchUserDataInBackground(user, new GetUserCallback() {
            @Override
            public void Done(User returnedUser) {
                if (returnedUser == null) {
                    showError();
                } else {
                    logUserIn(returnedUser);
                }
            }
        });
    }

    private void logUserIn(User returnedUser) {
        DatabaseHandler databaseHandler = new DatabaseHandler(this);
        databaseHandler.createUser(returnedUser);
        this.finish();
        startActivity(new Intent(this, Dashboard.class));
    }

    private void showError() {
        AlertDialog.Builder alert = new AlertDialog.Builder(this);
        alert.setMessage("Wrong Credential !");
        alert.setPositiveButton("Got It", null);
        alert.show();
    }
    public void Signin(View v){
        User user = new User(username.getText().toString(),pass.getText().toString());
        authenticateUser(user);
    }
}
