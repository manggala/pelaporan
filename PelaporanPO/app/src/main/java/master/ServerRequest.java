package master;

import android.app.ProgressDialog;
import android.content.Context;
import android.os.AsyncTask;
import android.trikarya.pelaporanpo.DatabaseHandler;
import android.trikarya.pelaporanpo.Riwayat;
import android.widget.Toast;

import com.android.volley.DefaultRetryPolicy;
import com.android.volley.Request;
import com.android.volley.RequestQueue;
import com.android.volley.Response;
import com.android.volley.RetryPolicy;
import com.android.volley.VolleyError;
import com.android.volley.toolbox.HurlStack;
import com.android.volley.toolbox.JsonObjectRequest;
import com.android.volley.toolbox.Volley;

import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;

import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStream;
import java.io.InputStreamReader;
import java.net.HttpURLConnection;
import java.net.MalformedURLException;
import java.net.URL;
import java.util.ArrayList;
import java.util.Calendar;
import java.util.List;


/**
 * Created by mustofa on 6/29/2016.
 */
public class ServerRequest {
    ProgressDialog progressDialog;
    HurlStack hurlStack;
    DatabaseHandler databaseHandler;
    Calendar calendar = Calendar.getInstance();
    String tgl;
    public static final int CONNECTION_TIMEOUT = 1000*90;
    public static final String SERVER_ADDRESS =  "http://preop-nearmiss.manggala12.com/public/";
    Context context;
    public ServerRequest(Context context)
    {
        tgl = String.valueOf(calendar.get(calendar.YEAR))+"-"+String.valueOf(calendar.get(calendar.MONTH)+1)+"-"+String.valueOf(calendar.get(calendar.DAY_OF_MONTH))+
                " "+String.valueOf(calendar.get(calendar.HOUR_OF_DAY))+":"+String.valueOf(calendar.get(calendar.MINUTE))+":"+String.valueOf(calendar.get(calendar.SECOND));
        databaseHandler = new DatabaseHandler(context);
        progressDialog = new ProgressDialog(context);
        progressDialog.setCancelable(false);
        this.context = context;
        progressDialog.setTitle("Processing");
        progressDialog.setMessage("Please Wait");
    }
    public void fetchUserDataInBackground(User user, final GetUserCallback userCallback){
        progressDialog.show();
        JsonObjectRequest jsonObjectRequest = new JsonObjectRequest(Request.Method.GET, SERVER_ADDRESS + "login_mob/" +user.getUsername()+"/"+user.getPassword()
                , null, new Response.Listener<JSONObject>() {
            @Override
            public void onResponse(JSONObject jsonResponse) {
                progressDialog.dismiss();
                try {
                    int kode = jsonResponse.getInt("id_operator");
                    String nama = jsonResponse.getString("nama");
                    String username = jsonResponse.getString("username");
                    String password= jsonResponse.getString("password");
                    String gcmID = jsonResponse.getString("id_gcm");
                    userCallback.Done(new User(kode, nama, username, password,0,gcmID));
                } catch (JSONException e) {
                    e.printStackTrace();
                    userCallback.Done(null);
                }
            }
        }, new Response.ErrorListener() {
            @Override
            public void onErrorResponse(VolleyError error) {
                progressDialog.dismiss();
                Toast.makeText(context, "Get data failed", Toast.LENGTH_LONG);
                userCallback.Done(null);
            }
        });
        RequestQueue requestQueue = Volley.newRequestQueue(context, hurlStack);
        RetryPolicy policy = new DefaultRetryPolicy(CONNECTION_TIMEOUT, DefaultRetryPolicy.DEFAULT_MAX_RETRIES, DefaultRetryPolicy.DEFAULT_BACKOFF_MULT);
        jsonObjectRequest.setRetryPolicy(policy);
        requestQueue.add(jsonObjectRequest);
    }

    public void storePO(final Context context, PreOperation preOperation, final StoreDataCallback storeDataCallback) {
        progressDialog.show();
        try {
            JSONObject jsonObject = new JSONObject();
            jsonObject.put("id_operator",databaseHandler.getUser().getId());
            jsonObject.put("id_headtruck",preOperation.getHeadTruck());
            jsonObject.put("tanggal_preOperation",preOperation.getTanggal());
            jsonObject.put("hourmeter",preOperation.getHourMeter());
            jsonObject.put("kilometer",preOperation.getKilometer());
            jsonObject.put("keterangan_preOperation",preOperation.getKet());
            jsonObject.put("pertanyaan_1",preOperation.getSoal1());
            jsonObject.put("pertanyaan_2",preOperation.getSoal2());
            jsonObject.put("pertanyaan_3",preOperation.getSoal3());
            jsonObject.put("pertanyaan_4",preOperation.getSoal4());
            jsonObject.put("pertanyaan_5",preOperation.getSoal5());
            jsonObject.put("pertanyaan_6",preOperation.getSoal6());
            jsonObject.put("pertanyaan_7",preOperation.getSoal7());
            jsonObject.put("pertanyaan_8",preOperation.getSoal8());
            jsonObject.put("pertanyaan_9",preOperation.getSoal9());
            jsonObject.put("pertanyaan_10",preOperation.getSoal10());
            jsonObject.put("pertanyaan_11",preOperation.getSoal11());
            jsonObject.put("pertanyaan_12",preOperation.getSoal12());
            jsonObject.put("pertanyaan_13",preOperation.getSoal13());
            jsonObject.put("pertanyaan_14",preOperation.getSoal14());
            jsonObject.put("pertanyaan_15",preOperation.getSoal15());
            jsonObject.put("pertanyaan_16",preOperation.getSoal16());
            jsonObject.put("pertanyaan_17",preOperation.getSoal17());
            jsonObject.put("pertanyaan_18",preOperation.getSoal18());
            jsonObject.put("pertanyaan_19",preOperation.getSoal19());
            jsonObject.put("pertanyaan_20",preOperation.getSoal20());
            jsonObject.put("pertanyaan_21",preOperation.getSoal21());
            jsonObject.put("pertanyaan_22",preOperation.getSoal22());
            jsonObject.put("pertanyaan_23",preOperation.getSoal23());
            jsonObject.put("pertanyaan_24",preOperation.getSoal24());
            jsonObject.put("pertanyaan_25",preOperation.getSoal25());
            jsonObject.put("pertanyaan_26",preOperation.getSoal26());
            JsonObjectRequest jsonObjectRequest = new JsonObjectRequest(Request.Method.POST, SERVER_ADDRESS + "setPO", jsonObject, new Response.Listener<JSONObject>() {
                @Override
                public void onResponse(JSONObject response) {
                    progressDialog.dismiss();
                    try {
                        if (response.length() != 0) {
                            int id = 0;
                            if(response.has("id"))
                                id = response.getInt("id");
                            storeDataCallback.Done(response.getString("status"),id);
                        }
                    } catch (JSONException e) {
                        e.printStackTrace();
                    }
                }
            }, new Response.ErrorListener() {
                @Override
                public void onErrorResponse(VolleyError error) {
                    progressDialog.dismiss();
                    Toast.makeText(context, error.toString(), Toast.LENGTH_LONG).show();
                }
            });

            RequestQueue requestQueue = Volley.newRequestQueue(context, hurlStack);
            RetryPolicy policy = new DefaultRetryPolicy(CONNECTION_TIMEOUT, DefaultRetryPolicy.DEFAULT_MAX_RETRIES, DefaultRetryPolicy.DEFAULT_BACKOFF_MULT);
            jsonObjectRequest.setRetryPolicy(policy);
            requestQueue.add(jsonObjectRequest);
        } catch (JSONException e) {
            e.printStackTrace();
        }
    }
    public void storeNM(final Context context, Nearmiss nearmiss, final StoreDataCallback storeDataCallback) {
        progressDialog.show();
        try {
            JSONObject jsonObject = new JSONObject();
            jsonObject.put("id_operator",databaseHandler.getUser().getId());
            jsonObject.put("tanggal",nearmiss.getTanggal());
            jsonObject.put("tahapan",nearmiss.getTahapan());
            jsonObject.put("saksi",nearmiss.getSaksi());
            jsonObject.put("penyebab",nearmiss.getPenyebab());
            jsonObject.put("penjelasan",nearmiss.getPenjelasan());
            jsonObject.put("lokasi",nearmiss.getLokasi());
            jsonObject.put("kerjaan",nearmiss.getKerjaan());
            jsonObject.put("foto1",nearmiss.getFoto1());
            jsonObject.put("foto2",nearmiss.getFoto2());
            JsonObjectRequest jsonObjectRequest = new JsonObjectRequest(Request.Method.POST, SERVER_ADDRESS + "setNM", jsonObject, new Response.Listener<JSONObject>() {
                @Override
                public void onResponse(JSONObject response) {
                    progressDialog.dismiss();
                    try {
                        if (response.length() != 0) {
                            int id = 0;
                            if(response.has("id"))
                                id = response.getInt("id");
                            storeDataCallback.Done(response.getString("status"),id);
                        }
                    } catch (JSONException e) {
                        e.printStackTrace();
                    }
                }
            }, new Response.ErrorListener() {
                @Override
                public void onErrorResponse(VolleyError error) {
                    progressDialog.dismiss();
                    Toast.makeText(context, error.toString(), Toast.LENGTH_LONG).show();
                }
            });

            RequestQueue requestQueue = Volley.newRequestQueue(context, hurlStack);
            RetryPolicy policy = new DefaultRetryPolicy(CONNECTION_TIMEOUT, DefaultRetryPolicy.DEFAULT_MAX_RETRIES, DefaultRetryPolicy.DEFAULT_BACKOFF_MULT);
            jsonObjectRequest.setRetryPolicy(policy);
            requestQueue.add(jsonObjectRequest);
        } catch (JSONException e) {
            e.printStackTrace();
        }
    }
    public void storeGCMID(final Context context, User user, final GetAllDataCallback getAllDataCallback) {
        try {
            JSONObject jsonObject = new JSONObject();
            jsonObject.put("kd_user", user.getId());
            jsonObject.put("id_gcm", user.getGcmId());
            JsonObjectRequest jsonObjectRequest = new JsonObjectRequest(Request.Method.POST, SERVER_ADDRESS + "setIdGCM", jsonObject, new Response.Listener<JSONObject>() {
                @Override
                public void onResponse(JSONObject response) {
                    progressDialog.dismiss();
                    try {
                        if (response.length() != 0) {
                            getAllDataCallback.Done(response.getString("status"));
                        }
                    } catch (JSONException e) {
                        e.printStackTrace();
                    }
                }
            }, new Response.ErrorListener() {
                @Override
                public void onErrorResponse(VolleyError error) {
                    progressDialog.dismiss();
                    Toast.makeText(context, error.toString(), Toast.LENGTH_LONG).show();
                }
            });

            RequestQueue requestQueue = Volley.newRequestQueue(context, hurlStack);
            RetryPolicy policy = new DefaultRetryPolicy(CONNECTION_TIMEOUT, DefaultRetryPolicy.DEFAULT_MAX_RETRIES, DefaultRetryPolicy.DEFAULT_BACKOFF_MULT);
            jsonObjectRequest.setRetryPolicy(policy);
            requestQueue.add(jsonObjectRequest);
        } catch (JSONException e) {
            e.printStackTrace();
        }
    }
    private void insertRiwayatToDB(List<RiwayatModel> riwayatList){
        int count = riwayatList.size();
        for(int i = 0; i < count; i++)
            databaseHandler.createRiwayat(riwayatList.get(i));
    }
    public void getRiwayat(final Context context, final GetAllDataCallback getAllDataCallback){
        progressDialog.setMessage("Downloading data, please wait");
        progressDialog.show();
        final List<RiwayatModel> riwayatList = new ArrayList<RiwayatModel>();
        JsonObjectRequest jsonObjectRequest = new JsonObjectRequest(Request.Method.GET, SERVER_ADDRESS + "/getRiwayat/"+databaseHandler.getUser().getId()
                , null, new Response.Listener<JSONObject>() {
            @Override
            public void onResponse(JSONObject response) {
                progressDialog.dismiss();
                try {
                    JSONArray jsonArray = response.getJSONArray("riwayat");
                    for (int i = 0; i < jsonArray.length(); i++) {
                        JSONObject jsonResponse = jsonArray.getJSONObject(i);
                        if (jsonResponse.length() != 0) {
                            riwayatList.add(new RiwayatModel(jsonResponse.getInt("id"),
                                    jsonResponse.getString("jenis"),
                                    jsonResponse.getString("tanggal"), jsonResponse.getInt("status")));
                        }
                    }
                    insertRiwayatToDB(riwayatList);
                    getAllDataCallback.Done(response.getString("status"));
                } catch (JSONException e) {
                    e.printStackTrace();
                    getAllDataCallback.Done(e.getMessage());
                }

            }
        }, new Response.ErrorListener() {
            @Override
            public void onErrorResponse(VolleyError error) {
                progressDialog.dismiss();
                getAllDataCallback.Done(error.toString());
            }
        });
        RequestQueue requestQueue = Volley.newRequestQueue(context, hurlStack);
        RetryPolicy policy = new DefaultRetryPolicy(CONNECTION_TIMEOUT, DefaultRetryPolicy.DEFAULT_MAX_RETRIES, DefaultRetryPolicy.DEFAULT_BACKOFF_MULT);
        jsonObjectRequest.setRetryPolicy(policy);
        requestQueue.add(jsonObjectRequest);
    }
}
