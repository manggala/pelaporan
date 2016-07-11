package master;

/**
 * Created by mustofa on 6/25/2016.
 */
public class User {
    private int id;
    private String nama;
    private String username;
    private String password;
    private String gcmId;

    public User(String username, String password) {
        this.username = username;
        this.password = password;
    }

    public User(int id, String nama, String username, String password, String gcmId) {
        this.id = id;
        this.nama = nama;
        this.username = username;
        this.password = password;
        this.gcmId = gcmId;
    }

    public String getGcmId() {
        return gcmId;
    }

    public void setGcmId(String gcmId) {
        this.gcmId = gcmId;
    }

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public String getNama() {
        return nama;
    }

    public void setNama(String nama) {
        this.nama = nama;
    }

    public String getUsername() {
        return username;
    }

    public void setUsername(String username) {
        this.username = username;
    }

    public String getPassword() {
        return password;
    }

    public void setPassword(String password) {
        this.password = password;
    }
}
