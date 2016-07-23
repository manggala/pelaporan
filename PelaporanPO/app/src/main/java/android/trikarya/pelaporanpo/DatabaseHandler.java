package android.trikarya.pelaporanpo;

import android.content.ContentValues;
import android.content.Context;
import android.database.Cursor;
import android.database.sqlite.SQLiteDatabase;
import android.database.sqlite.SQLiteOpenHelper;

import java.util.ArrayList;
import java.util.List;

import master.RiwayatModel;
import master.User;

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
            KEY_PASSWORD = "password",
            KEY_GCMID = "gcm",
            TABLE_RIWAYAT = "riwayat",
            KEY_ID = "id",
            KEY_JENIS = "jenis",
            KEY_TANGGAL = "tanggal",
            KEY_STATUS = "status",
            TABLE_KONFIGURASI = "Konfigurasi",
            KEY_STATUS_APP = "status_app";
    public DatabaseHandler(Context context) {
        super(context, DATABASE_NAME, null, DATABASE_VERSION);
    }

    @Override
    public void onCreate(SQLiteDatabase db) {
        db.execSQL("CREATE TABLE " + TABLE_USER +
                "(" + KEY_KODE_USER + " INTEGER PRIMARY KEY NOT NULL,"
                + KEY_NAMA_USER + " TEXT NOT NULL,"
                + KEY_USERNAME + " TEXT NOT NULL,"
                + KEY_PASSWORD + " TEXT NOT NULL,"
                + KEY_STATUS + " INTEGER NOT NULL,"
                + KEY_GCMID + " TEXT NOT NULL)");
        db.execSQL("CREATE TABLE " + TABLE_RIWAYAT +
                "(" + KEY_ID + " INTEGER PRIMARY KEY NOT NULL,"
                + KEY_JENIS + " TEXT NOT NULL,"
                + KEY_TANGGAL + " TEXT NOT NULL,"
                + KEY_STATUS + " INTEGER NOT NULL)");
        db.execSQL("CREATE TABLE " + TABLE_KONFIGURASI +
                "(" + KEY_STATUS_APP + " INTEGER DEFAULT 0)");
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
        values.put(KEY_STATUS,user.getStatus());
        values.put(KEY_GCMID,user.getGcmId());
        db.insert(TABLE_USER, null, values);
        values.clear();
        db.close();
    }
    public User getUser()
    {
        SQLiteDatabase db = getReadableDatabase();
        User user = null;
        Cursor cursor = db.query(TABLE_USER, new String[]{KEY_KODE_USER, KEY_NAMA_USER, KEY_USERNAME, KEY_PASSWORD, KEY_STATUS, KEY_GCMID}
                , null, null, null,null,null,null);
        if(cursor==null)
            return null;
        if(cursor.moveToFirst())
            user = new User(cursor.getInt(0),cursor.getString(1),cursor.getString(2), cursor.getString(3),cursor.getInt(4), cursor.getString(5));
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
        values.put(KEY_PASSWORD, user.getPassword());
        values.put(KEY_STATUS,user.getStatus());
        values.put(KEY_GCMID,user.getGcmId());
        int isUpdate = db.update(TABLE_USER, values, KEY_KODE_USER + "=?", new String[]{String.valueOf(user.getId())});
        values.clear();
        db.close();
        return isUpdate;
    }
    public void createRiwayat(RiwayatModel riwayatModel)
    {
        SQLiteDatabase db = getWritableDatabase();
        ContentValues values = new ContentValues();
        values.put(KEY_ID,riwayatModel.getId());
        values.put(KEY_JENIS,riwayatModel.getJenis());
        values.put(KEY_TANGGAL,riwayatModel.getTanggal());
        values.put(KEY_STATUS,riwayatModel.getStatus());
        db.insert(TABLE_RIWAYAT, null, values);
        values.clear();
        db.close();
    }
    public RiwayatModel getRiwayat(int id)
    {
        SQLiteDatabase db = getReadableDatabase();
        RiwayatModel riwayatModel = null;
        Cursor cursor = db.query(TABLE_RIWAYAT, new String[]{KEY_ID, KEY_JENIS, KEY_TANGGAL, KEY_STATUS}, KEY_ID + "=?", new String[]{String.valueOf(id)}, null, null, null, null);
        if(cursor==null)
            return null;
        if(cursor.moveToFirst())
            riwayatModel = new RiwayatModel(cursor.getInt(0),cursor.getString(1),cursor.getString(2), cursor.getInt(3));
        cursor.close();
        db.close();
        return riwayatModel;
    }
    public List<RiwayatModel> getAllRiwayat()
    {
        SQLiteDatabase db = getReadableDatabase();
        List<RiwayatModel> riwayatModelList = new ArrayList<RiwayatModel>();
        Cursor cursor = db.rawQuery("SELECT * FROM " + TABLE_RIWAYAT, null);
        if(cursor==null)
            return null;
        if(cursor.moveToFirst())
            do {
                riwayatModelList.add(new RiwayatModel(cursor.getInt(0), cursor.getString(1), cursor.getString(2), cursor.getInt(3)));
            }while (cursor.moveToNext());
        cursor.close();
        db.close();
        return riwayatModelList;
    }
    public void deleteRiwayat()
    {
        SQLiteDatabase db = getWritableDatabase();
        db.delete(TABLE_RIWAYAT, null, null);
        db.close();
    }
    public int getRiwayatCount()
    {
        SQLiteDatabase db = getReadableDatabase();
        Cursor cursor = db.rawQuery("SELECT * FROM " + TABLE_RIWAYAT, null);
        int count = cursor.getCount();
        cursor.close();
        db.close();
        return count;
    }
    public int updateRiwayat(RiwayatModel riwayatModel)
    {
        SQLiteDatabase db = getWritableDatabase();
        ContentValues values = new ContentValues();
        values.put(KEY_ID,riwayatModel.getId());
        values.put(KEY_JENIS,riwayatModel.getJenis());
        values.put(KEY_TANGGAL,riwayatModel.getTanggal());
        values.put(KEY_STATUS, riwayatModel.getStatus());
        int isUpdate = db.update(TABLE_RIWAYAT,values,KEY_ID + "=?",new String[]{String.valueOf(riwayatModel.getId())});
        values.clear();
        db.close();
        return isUpdate;
    }
    public void createKonfigurasi(Integer status)
    {
        SQLiteDatabase db = getWritableDatabase();
        ContentValues values = new ContentValues();
        values.put(KEY_STATUS_APP,status);
        db.insert(TABLE_KONFIGURASI, null, values);
        values.clear();
        db.close();
    }
    public Integer getKonfigurasi()
    {
        Integer status_app = 0;
        SQLiteDatabase db = getReadableDatabase();
        Cursor cursor = db.query(TABLE_KONFIGURASI, new String[]{KEY_STATUS_APP}, null, null, null, null, null, null);
        if(cursor==null)
            return null;
        if(cursor.moveToFirst())
            status_app = cursor.getInt(0);
        cursor.close();
        db.close();
        return status_app;
    }
    public void deleteKonfigurasi()
    {
        SQLiteDatabase db = getWritableDatabase();
        db.delete(TABLE_KONFIGURASI, null, null);
        db.close();
    }
    public int getKonfigurasiCount()
    {
        SQLiteDatabase db = getReadableDatabase();
        Cursor cursor = db.rawQuery("SELECT * FROM " + TABLE_KONFIGURASI, null);
        int count = cursor.getCount();
        cursor.close();
        db.close();
        return count;
    }
    public int updateKonfigurasi(Integer status)
    {
        SQLiteDatabase db = getWritableDatabase();
        ContentValues values = new ContentValues();
        values.put(KEY_STATUS_APP,status);
        int isUpdate = db.update(TABLE_KONFIGURASI,values,null,null);
        values.clear();
        db.close();
        return isUpdate;
    }
}
