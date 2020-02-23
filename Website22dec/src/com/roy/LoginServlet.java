package com.roy;
import Util.*;

import java.io.*;
import java.sql.*;

import javax.servlet.http.*;
import javax.servlet.*;
import javax.swing.JOptionPane;



public class LoginServlet extends HttpServlet {
	Statement st = null;
	Connection con = null;
	ResultSet rs = null;
	String pw;
	String aid;
	String mail;
	long ph;
	String id;
	String pass;
	@Override
	protected void doPost(HttpServletRequest request, HttpServletResponse response)
			throws ServletException, IOException {
		response.setContentType("text/html");
		PrintWriter out = response.getWriter();
		id =request.getParameter("uid");
		pass = request.getParameter("password");
		try {
			Class.forName("com.mysql.jdbc.Driver");
			String url="jdbc:mysql://localhost:3306/roydb";
			con=DriverManager.getConnection(url,"root","rahul");
			String sql = "Select * from admin";
			st = con.createStatement();
			rs = st.executeQuery(sql);
			while (rs.next()) {
				aid = rs.getString(1);
				String name = rs.getString(2);
				mail = rs.getString(3);
				ph = rs.getLong(4);
				pw = rs.getString(5);
		if (pass.equals(pw) && aid.equals(id)) {
			HttpSession sess = request.getSession();
			RequestDispatcher rd2 = request.getRequestDispatcher("index.html");
			rd2.include(request, response);
		} else {
			out.println("<h3><font color='red'/>"
					+ "Please Enter a Valid user id or Password");
			RequestDispatcher rd3= request.getRequestDispatcher("login.html");
			rd3.include(request, response);
		}
		}
		}catch (Exception e) {
			e.printStackTrace();
			System.out.println(e);
		}
		finally{
		JdbcUtil.cleanup(rs, con, st);
		}
	}
}



