package com.roy;
import Util.*;

import java.io.*;
import java.sql.*;

import javax.servlet.http.*;
import javax.servlet.*;
public class ResetServlet extends HttpServlet {
	PreparedStatement ps = null;
	Connection con = null;
	int pw;
	int id;
	int count;
	protected void doPost(HttpServletRequest request, HttpServletResponse response)
			throws ServletException, IOException {
		PrintWriter out = response.getWriter();
		id=Integer.parseInt(request.getParameter("uid"));
	    pw=Integer.parseInt(request.getParameter("newpw"));
	//if(s!=0 && pass!=0 && nwpass!=0){
   //System.out.println("inside if");*/
		try {
			Class.forName("com.mysql.jdbc.Driver");
			String url="jdbc:mysql://localhost:3306/roydb";
			con=DriverManager.getConnection(url,"root","rahul");
			String sql= "update admin set password=? where aid=?";
			ps=con.prepareStatement(sql);
			ps.setInt(1,pw);
			ps.setInt(2,id);
			 count= ps.executeUpdate();
			if (count!=0) {
		out.write("Password Updated Succesfully !!!");		
	RequestDispatcher rd=request.getRequestDispatcher("index.html");
	rd.include(request,response);
			}else{
				out.write("Please enter correct credential");
				RequestDispatcher rd=request.getRequestDispatcher("reset.html");
				rd.include(request,response);
			}
		} catch (Exception e) {
			e.printStackTrace();
		}
		finally{
		JdbcUtil.cleanup(ps,con);
		}
		}
	}


