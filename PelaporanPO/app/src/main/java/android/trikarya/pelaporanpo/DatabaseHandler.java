package android.trikarya.pelaporanpo;

import android.content.ContentValues;
import android.content.Context;
import android.database.Cursor;
import android.database.sqlite.SQLiteDatabase;
import android.database.sqlite.SQLiteOpenHelper;

import java.util.ArrayList;
import java.util.List;

/**
 * Created by mustofa on 6/25/2016.
 */
public class DatabaseHandler extends SQLiteOpenHelper {
    private static final int DATABASE_VERSION = 1;
    private static final String DATABASE_NAME = "Pelaporan",
            TABLE_USER = "user",
            KEY_KODE_USER = "id",
            KEY_NAMA_USER = "nama",
            KEY_USERNAME = "username",
            KEY_PASSWORD = "password";
    public DatabaseHandler(Context context){
        super(context, DATABASE_NAME, null, DATABASE_VERSION);
    }

    @Override
    public void onCreate(SQLiteDatabase db) {
        db.execSQL("CREATE TABLE " + TABLE_USER +
                "(" + KEY_KODE_USER + " INTEGER PRIMARY KEY NOT NULL,"
                + KEY_NAMA_USER + " TEXT NOT NULL,"
                + KEY_USERNAME + " TEXT NOT NULL,"
                + KEY_PASSWORD + " TEXT NOT NULL)");
    }

    @Override
    public void onUpgrade(SQLiteDatabase db, int oldVersion, int newVersion) {
        onCreate(db);
    }

    public void createUser(User user)
    {
        SQLiteDatabase db = getWritableDatabase();
        ContentValues values = new ContentValues();
        values.put(KEY_KODE_USER,user.getId());
        values.put(KEY_NAMA_USER,user.getNama());
        values.put(KEY_USERNAME,user.getUsername());
        values.put(KEY_PASSWORD,user.getPassword());
        db.insert(TABLE_USER, null, values);
        values.clear();
        db.close();
    }
    public User getUser()
    {
        SQLiteDatabase db = getReadableDatabase();
        User user = null;
        Cursor cursor = db.query(TABLE_USER, new String[]{KEY_KODE_USER, KEY_NAMA_USER, KEY_USERNAME, KEY_PASSWORD}
                , null, null, null,null,null,null);
        if(cursor==null)
            return null;
        if(cursor.moveToFirst())
            user = new User(cursor.getInt(0),cursor.getString(1),cursor.getString(2), cursor.getString(3));
        cursor.close();
        db.close();
        return user;
    }
    public void deleteUser()
    {
        SQLiteDatabase db = getWritableDatabase();
        db.delete(TABLE_USER, null, null);
        db.close();
    }
    public int getUserCount()
    {
        SQLiteDatabase db = getReadableDatabase();
        Cursor cursor = db.rawQuery("SELECT * FROM " + TABLE_USER, null);
        int count = cursor.getCount();
        cursor.close();
        db.close();
        return count;
    }
    public int updateUser(User user)
    {
        SQLiteDatabase db = getWritableDatabase();
        ContentValues values = new ContentValues();
        values.put(KEY_KODE_USER,user.getId());
        values.put(KEY_NAMA_USER,user.getNama());
        values.put(KEY_USERNAME,user.getUsername());
        values.put(KEY_PASSWORD,user.getPassword());
        int isUpdate = db.update(TABLE_USER,values,KEY_KODE_USER + "=?",new String[]{String.valueOf(user.getId())});
        values.clear();
        db.close();
        return isUpdate;
    }

}
