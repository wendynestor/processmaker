package com.colosa.qa.automatization.tests.designerlist;

import org.junit.Assert;
import org.junit.AfterClass;
import org.junit.Test;

import com.colosa.qa.automatization.pages.*;
import com.colosa.qa.automatization.common.*;

import java.io.FileNotFoundException;
import java.io.IOException;

public class TestDesignerList{


	@Test
	public void openProc() throws Exception{

		Pages.Login().gotoUrl();
		Pages.Login().loginUser("admin", "admin", "workflow");
		Pages.Main().goDesigner();
		//Pages.DesignerList().openProcess("Test2");
		Pages.DesignerList().importProcess("/home/ernesto/Documents/Test_6.pm");
		//Pages.DesignerList().exportProcess("Test2");
	}

}