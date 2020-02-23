package com.roy;
import Util.*;
import java.io.*;
import java.sql.*;
import javax.servlet.http.*;
import javax.servlet.*;
public class PartnerServlet extends HttpServlet {
	 PreparedStatement ps= null;
	 Connection con = null;
	String name;
	String email;
	Long mobileno;
	String msg;
	@Override
	protected void doPost(HttpServletRequest request, HttpServletResponse response)
			throws ServletException, IOException {
		response.setContentType("text/html");
		PrintWriter out = response.getWriter();
		name = request.getParameter("name");
		email = request.getParameter("email");
		mobileno=Long.parseLong(request.getParameter("phone"));
		msg=request.getParameter("message");
		//if(name!=null && email!=null && mobileno.length()!=10 && position!=null && resume!=null){
		try {
			Class.forName("com.mysql.jdbc.Driver");
			String url="jdbc:mysql://localhost:3306/roydb";
			con=DriverManager.getConnection(url,"root","rahul");
			String sql= "insert into partnership_reg values(?,?,?,?)";
			ps= con.prepareStatement(sql);
			ps.setString(1, name);
		    ps.setLong(2,mobileno);
			ps.setString(3,email);
			ps.setString(4,msg);
		     ps.executeUpdate();
		 //if(count!=0){
	out.write("Thank you \t"+name+""+"\t for Submission, we will respone you soon !!!");
//}
			}
		 catch (Exception e) {
			e.printStackTrace();
		}
		finally{
		JdbcUtil.cleanup(ps,con);
		}
	}
}


