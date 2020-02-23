package com.roy;
import Util.*;

import java.io.*;
import java.sql.*;

import javax.servlet.http.*;
import javax.servlet.*;
public class ForgotServlet extends HttpServlet {
	PreparedStatement ps = null;
	Connection con = null;
	ResultSet rs=null;
	String mail;
	Long phone;
	int count;
	String email;
	Long ph;
	long pass;
	protected void doPost(HttpServletRequest request, HttpServletResponse response)
			throws ServletException, IOException {
		PrintWriter out = response.getWriter();
	 mail=request.getParameter("eid");
	phone=Long.parseLong(request.getParameter("ph"));
		try {
			Class.forName("com.mysql.jdbc.Driver");
			String url="jdbc:mysql://localhost:3306/roydb";
			con=DriverManager.getConnection(url,"root","rahul");
			String sql = "select * from admin where email=?";
			ps=con.prepareStatement(sql);
		    ps.setString(1,mail);
		    rs= ps.executeQuery();
			while(rs.next()) {
				email=rs.getString(3);
				ph=rs.getLong(4);
				pass=rs.getLong(5);
			}
			if(email.equals(mail) && ph.equals(phone)){
response.sendRedirect("http://promo.smsfresh.co/api/sendmsg.php?user=royelectricals&pass=123456&sender=Sectrx&phone="+ph+"&text="+"password:-"+pass+"&priority=sdnd&stype=normal");
			}else{
				out.write("<font color='red'/>"+"Your email or phone Not match, Please Try again !!! ");
			}
		} catch (Exception e) {
			e.printStackTrace();
			System.out.println(e);
		}finally{
		JdbcUtil.cleanup(rs, con,ps);
		}
		}
	}

