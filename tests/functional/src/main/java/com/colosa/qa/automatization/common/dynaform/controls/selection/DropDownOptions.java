package com.colosa.qa.automatization.common.dynaform.controls.selection;

import com.colosa.qa.automatization.common.dynaform.controls.ControlOptions;
import java.util.Map;
import java.util.HashMap;

public class DropDownOptions extends ControlOptions{

	private DropDownOption[] options;

	public void addOption(String label, String value){
		
	}
/*
	public Map<String, String> getOptions(){
		return this.options;
	}*/

	@Override
	public void fillForm() throws Exception{
		super.fillForm();
		for(String[] x:this.opts)
			for(String y:x)
				System.out.println(y);
	}
	
}