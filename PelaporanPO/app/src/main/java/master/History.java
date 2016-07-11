package master;

/**
 * Created by Ahmad Mustofa on 05/07/2016.
 */
public class History {
    int id_hist;
    String jenis,tanggal;

    public History(int id_hist, String jenis, String tanggal) {
        this.id_hist = id_hist;
        this.jenis = jenis;
        this.tanggal = tanggal;
    }

    public int getId_hist() {
        return id_hist;
    }

    public void setId_hist(int id_hist) {
        this.id_hist = id_hist;
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
