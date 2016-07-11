package master;

/**
 * Created by Ahmad Mustofa on 08/07/2016.
 */
public class RiwayatModel {
    int id,status;
    String jenis,tanggal;

    public RiwayatModel(int id, String jenis, String tanggal, int status) {
        this.id = id;
        this.status = status;
        this.jenis = jenis;
        this.tanggal = tanggal;
    }

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public int getStatus() {
        return status;
    }

    public void setStatus(int status) {
        this.status = status;
    }

    public String getJenis() {
        return jenis;
    }

    public void setJenis(String jenis) {
        this.jenis = jenis;
    }

    public String getTanggal() {
        return tanggal;
    }

    public void setTanggal(String tanggal) {
        this.tanggal = tanggal;
    }
}
