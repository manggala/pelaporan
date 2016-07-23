package android.trikarya.pelaporanpo;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.MenuItem;
import android.view.View;
import android.view.ViewGroup;
import android.widget.ArrayAdapter;
import android.widget.LinearLayout;
import android.widget.ListView;
import android.widget.TextView;

import java.util.ArrayList;
import java.util.List;

import master.History;
import master.RiwayatModel;

public class Riwayat extends AppCompatActivity {

    DatabaseHandler databaseHandler;
    ArrayAdapter<RiwayatModel> adapter;
    ListView listView;
    List<RiwayatModel> fromDatabase;

    @Override
    public void onBackPressed() {
        finish();
        startActivity(new Intent(this, Dashboard.class));
    }
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_riwayat);
        listView = (ListView) findViewById(R.id.history_list);
        databaseHandler = new DatabaseHandler(this);
        instanceView();
    }
    public void instanceView()
    {
        if(fromDatabase == null)
            fromDatabase = databaseHandler.getAllRiwayat();
        int count = fromDatabase.size();
        if(count > 0){
            populateList();
        }
    }
    public void populateList()
    {
        adapter = new HistoryListAdapter();
        listView.setAdapter(adapter);
    }
    private class HistoryListAdapter extends ArrayAdapter<RiwayatModel> {
        public HistoryListAdapter(){
            super(Riwayat.this,R.layout.historylist_item,fromDatabase);
        }

        @Override
        public View getView(int position, View convertView, ViewGroup parent) {
            if(convertView == null)
                convertView = getLayoutInflater().inflate(R.layout.historylist_item,parent,false);
            final RiwayatModel currentRiwayat = fromDatabase.get(position);
            TextView jenis = (TextView) convertView.findViewById(R.id.jenis);
            jenis.setText(currentRiwayat.getJenis());
            TextView status = (TextView) convertView.findViewById(R.id.status);
            String stat = "";
            if(currentRiwayat.getStatus()==0)
                stat = "Pending";
            else if(currentRiwayat.getStatus()==1)
                stat = "Confirmed";
            else if(currentRiwayat.getStatus()== -1)
                stat = "Rejected";
            status.setText(stat);
            TextView tgl = (TextView) convertView.findViewById(R.id.tgl_log);
            tgl.setText(currentRiwayat.getTanggal());
            return convertView;
        }
    }
    @Override
    public boolean onOptionsItemSelected(MenuItem item) {
        switch (item.getItemId()) {
            case android.R.id.home:
                onBackPressed();
                break;
        }
        return true;
    }
}
