package com.roy;
import java.io.File;
import java.io.FileInputStream;
import java.io.FileNotFoundException;
import java.io.IOException;
import java.io.InputStream;
import java.io.PrintWriter;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.SQLException;
import javax.servlet.ServletException;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import Util.*;
import javax.servlet.http.HttpServletResponse;
public class CareerServ extends HttpServlet {
	protected void doPost(HttpServletRequest req, HttpServletResponse resp)
			throws ServletException, IOException {
		doGet(req, resp);
	}
	
	@Override
	protected void doGet(HttpServletRequest req, HttpServletResponse resp)
			throws ServletException, IOException {

		resp.setContentType("txt/html");
		PrintWriter out = resp.getWriter();
		String fname = req.getParameter("name");
		String email = req.getParameter("email");
		//Long phone =Long.parseLong(
		String phone = req.getParameter("mno");
		String position = req.getParameter("psapplied");
		String resume = req.getParameter("fileupload");
		System.out.println("********************"+ resume);
		Connection con = null;
		PreparedStatement ps = null;
		InputStream is = null;
		try {
			Class.forName("com.mysql.jdbc.Driver");
			con = DriverManager.getConnection("jdbc:mysql://localhost:3306/roydb","root","rahul");
			String sql="insert into career_form values (?,?,?,?,?)";
			System.out.println("................inserted successfuly................");
			ps=con.prepareStatement(sql);
			ps.setString(1, fname);
			ps.setString(2, email);
			ps.setString(3, phone);
			ps.setString(4, position);
			is = new FileInputStream(new File(resume));
			System.out.println("*************************"+ is.available());
			ps.setBinaryStream(5,is);
			int count = ps.executeUpdate();
		System.out.println("Count: " + count);
		} catch (Exception e) {
			e.printStackTrace();
		}
		finally {
			JdbcUtil.cleanup(ps,con);
		}
		
	}
	
	
	
}
