package android.trikarya.pelaporanpo;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.EditText;

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
    public void Signin(View v){
        //if valid
        user = new User(1,username.getText().toString(),username.getText().toString(),pass.getText().toString());
        databaseHandler.createUser(user);
        startActivity(new Intent(this,SplashScreen.class));
        finish();
    }
}
