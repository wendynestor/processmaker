package com.colosa.qa.automatization.common.dynaform.controls.input;

import com.colosa.qa.automatization.common.Browser;
import com.colosa.qa.automatization.common.dynaform.controls.input.InputControlOptions;
import com.colosa.qa.automatization.common.dynaform.controls.DependentFieldsApplicableOption;
import org.openqa.selenium.support.ui.Select;
import org.openqa.selenium.WebElement;

public class TextFieldOptions extends InputControlOptions{

	public TextTransform textTransform = TextTransform.NONE;

	public enum TextTransform{
		NONE(""),
		UPPER_CASE("UPPER"),
		LOWER_CASE("LOWER");

		private String value;

		TextTransform(String value){
			this.value = value;
		}

		public String getValue(){
			return this.value;
		}
	}

	public enum Validate{
		ANY("Any"),
		ALPHA("Alpha"),
		ALPHA_NUMERIC("AlphaNum"),
		INT("Int"),
		REAL("Real"),
		EMAIL("Email"),
		LOGIN("Login");

		private String value;

		Validate(String value){
			this.value = value;
		}

		public String getValue(){
			return this.value;
		}
	}

	public TextFieldOptions(){
		this.dependentFieldsApplicableBehavior = new DependentFieldsApplicableOption();
		this.validate = (Validate.ANY).getValue();
	}

	public void setValidate(Validate validate){
		this.validate = validate.getValue();
	}

	public void setSize(int i){
		super.setSize(i);
	}

	public void setMask(String mask){
		this.mask = mask;
	}

	public void setMaxLength(int length){
		this.maxLength = length;
	}

	public void setDefaultValue(String defaultValue){
		this.defaultValue = defaultValue;
	}

	public void addDependentField(String fieldName){
		super.addDependentField(fieldName);
	}

	@Override
	public void fillForm() throws Exception{
		super.fillForm();
		WebElement we = null;
		Select ddown = null;
		
		//ddown = new Select(Browser.getElement("dynaformDesigner.webElement.blankDynaformModal.validate"));
		//ddown.selectByValue(this.validate.getValue());
		//Browser.getElement("dynaformDesigner.webElement.blankDynaformModal.mask").sendKeys(this.mask);
		ddown = new Select(Browser.getElement("dynaformDesigner.webElement.blankDynaformModal.textTransform"));
		ddown.selectByValue(this.textTransform.getValue());
		Browser.getElement("dynaformDesigner.webElement.blankDynaformModal.hint").sendKeys(this.hint);
		//we = Browser.getElement("dynaformDesigner.webElement.blankDynaformModal.size");
		//we.clear();
		//we.sendKeys(Integer.toString(this.size));
	}
}