package com.roy;
import java.io.*;
import java.util.StringTokenizer;
import java.sql.*;

import javax.servlet.http.*;
import javax.servlet.*;

import Util.JdbcUtil;
public class CareerServlet extends HttpServlet {
	PreparedStatement ps= null;
	Connection con = null;
	FileInputStream fis=null;
	String	name;
	String	email;
	String	position;
	Long mobileno;
	String resume;
	 String absResume=resume;
	protected void doPost(HttpServletRequest request, HttpServletResponse response)
			throws ServletException, IOException {
		response.setContentType("text/html");
		PrintWriter out = response.getWriter();
		name = request.getParameter("name");
		 email = request.getParameter("email");
    	mobileno=Long.parseLong(request.getParameter("mn"));
		 position=request.getParameter("ps");
		resume=request.getParameter("fupload");
		//if(name!=null && email!=null && mobileno.length()!=10 && position!=null && resume!=null){
		StringTokenizer tok=new StringTokenizer(resume,"\\");
		while(tok.hasMoreTokens())
			resume=tok.nextToken();
		try {
			Class.forName("com.mysql.jdbc.Driver");
			String url="jdbc:mysql://localhost:3306/roydb";
			con=DriverManager.getConnection(url,"root","rahul");
			String sql= "insert into career_form values(?,?,?,?)";
			ps= con.prepareStatement(sql);
			ps.setString(1, name);
			ps.setString(2,email);
		    ps.setLong(3,mobileno);
			ps.setString(4,position);
			File image=new File(absResume);
			fis=new FileInputStream(image);
			ps.setBinaryStream(5, fis,(int)image.length());
			ps.executeUpdate();
			out.write("Thank you"+name+"for Submission on our Career, we will respone you soon !!!");
//if(count!=0){
//	out.write("Thank you"+name+"for Submission, we will respone you soon !!!");}
			}
		 catch (Exception e) {
			e.printStackTrace();
			System.out.println(e);
		}
	//}
		//    else{
		    	//out.write("please Enter All field correctly");
		 //   	response.sendRedirect("okkk");}	
		finally{
	JdbcUtil.cleanup(ps, con);
	if(fis!=null)
	try{
		fis.close();
	}catch(IOException e){
		e.printStackTrace();
	}
		}
	}
}


