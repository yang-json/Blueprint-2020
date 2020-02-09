package com.Bluprint;

import javax.imageio.ImageIO;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

import java.io.File;
import java.io.IOException;
import java.io.PrintWriter;
import java.awt.image.BufferedImage;

public class AddServlet extends HttpServlet
{
	public void doPost(HttpServletRequest req, HttpServletResponse res) throws IOException
	{
		
		BufferedImage img = null;
		try {
			img = ImageIO.read(new File("pic"));
		} catch (IOException e) {
		}
	}
	
}
