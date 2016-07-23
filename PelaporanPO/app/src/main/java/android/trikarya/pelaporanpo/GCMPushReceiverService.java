package android.trikarya.pelaporanpo;

import android.app.NotificationManager;
import android.app.PendingIntent;
import android.content.Context;
import android.content.Intent;
import android.media.RingtoneManager;
import android.net.Uri;
import android.os.Bundle;
import android.support.v4.app.NotificationCompat;

import com.google.android.gms.gcm.GcmListenerService;

import master.RiwayatModel;


/**
 * Created by Ahmad Mustofa, PT Trikarya Teknologi
 */
public class GCMPushReceiverService extends GcmListenerService {

    DatabaseHandler databaseHandler = new DatabaseHandler(GCMPushReceiverService.this);
    @Override
    public void onMessageReceived(String from, Bundle data) {
        String tipe = data.getString("tipe");
        String status = data.getString("status");
        int id_stat = 0;
        if(status.equals("confirmed"))
            id_stat = 1;
        else
            id_stat = -1;
        int id = Integer.parseInt(data.getString("id"));
        RiwayatModel riwayatModel = databaseHandler.getRiwayat(id);
        riwayatModel.setStatus(id_stat);
        databaseHandler.updateRiwayat(riwayatModel);
        sendNotification(tipe, status);
    }

    private void sendNotification(String tipe,String status) {
        String message = "Your "+tipe+" form has been "+status;
        Intent intent;
        intent = new Intent(this, Riwayat.class);
        intent.addFlags(Intent.FLAG_ACTIVITY_CLEAR_TOP);
        Uri uri= RingtoneManager.getDefaultUri(RingtoneManager.TYPE_NOTIFICATION);
        int requestCode = 0;
        PendingIntent pendingIntent = PendingIntent.getActivity(this, requestCode, intent, PendingIntent.FLAG_ONE_SHOT);
        NotificationCompat.Builder noBuilder = new NotificationCompat.Builder(this)
                .setSmallIcon(R.mipmap.ic_launcher)
                .setContentText(message)
                .setAutoCancel(true)
                .setContentIntent(pendingIntent)
                .setSound(uri)
                .setContentTitle("Pelaporan PO");
        NotificationManager notificationManager = (NotificationManager)getSystemService(Context.NOTIFICATION_SERVICE);
        notificationManager.notify(0, noBuilder.build());
    }
}
