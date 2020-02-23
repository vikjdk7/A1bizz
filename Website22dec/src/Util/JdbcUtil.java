package Util;
import java.sql.*;
public class JdbcUtil {
	static{
		try{
			Class.forName("com.mysql.jdbc.Driver");
		}catch(ClassNotFoundException e){
			e.printStackTrace();
		}
	}
	public static Connection getMySqlConnection() throws SQLException{
		String url="jdbc:mysql://localhost:3306/roydb";
		Connection con=DriverManager.getConnection(url,"root","rahul");
		return con;
	}
	public static void cleanup(Statement st,Connection con){
		try{
			if(st!=null) st.close();
			if(con!=null) con.close();
		}catch(Exception e){
			e.printStackTrace();
		}
	}
public static void cleanup(ResultSet rs,Connection con,Statement st){
	try{
		if(rs!=null) rs.close();
		if(con!=null) con.close();
		if(st!=null) st.close();
	}catch(Exception e){
		e.printStackTrace();
	}
}
}