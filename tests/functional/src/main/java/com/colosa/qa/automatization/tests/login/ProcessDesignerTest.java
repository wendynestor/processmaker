package com.colosa.qa.automatization.tests.login;

import java.lang.Exception;
import com.colosa.qa.automatization.pages.Home;
import com.colosa.qa.automatization.pages.Pages;
import com.colosa.qa.automatization.pages.ProcessDesigner;
import com.colosa.qa.automatization.common.Browser;
import com.colosa.qa.automatization.common.dynaform.DynaformDesigner;
import com.colosa.qa.automatization.common.dynaform.controls.input.TextFieldOptions;
import com.colosa.qa.automatization.common.dynaform.controls.input.TextAreaOptions;
import com.colosa.qa.automatization.common.dynaform.controls.input.PasswordOptions;
import com.colosa.qa.automatization.common.dynaform.controls.input.SuggestOptions;
import com.colosa.qa.automatization.common.dynaform.controls.selection.DropDownOptions;
import com.colosa.qa.automatization.common.dynaform.controls.ControlOptions;
import com.colosa.qa.automatization.common.extJs.ExtJSGrid;
import com.colosa.qa.automatization.common.dynaform.controls.DependentFieldsApplicableOption;
import org.openqa.selenium.By;
import org.openqa.selenium.interactions.Actions;
import org.openqa.selenium.WebElement;

public class ProcessDesignerTest{

	public static void main(String[] args) throws Exception{
		Pages.Login().gotoUrl();
		Pages.Login().loginDefaultUser();
		Pages.Main().goDesigner();

		Browser.driver().switchTo().frame("frameMain");

		ExtJSGrid grid = new ExtJSGrid(Browser.driver().findElement(By.id("processesGrid")), Browser.driver(), 10);
		WebElement we = grid.getRowByColumnValue("Process Title", "Test X");
		Actions action = new Actions(Browser.driver());
		action.doubleClick(we);
                action.perform();

                Browser.driver().switchTo().defaultContent();
                DynaformDesigner dynaform = ProcessDesigner.newBlankDynaform(new java.util.Date().toString(), ProcessDesigner.DynaformSubType.NORMAL);
               
                TextFieldOptions options = new TextFieldOptions();
                options.fieldName = "myText";
                options.label = "ingrese un texto";
                options.setMaxLength(6);
                options.setValidate(TextFieldOptions.Validate.ALPHA_NUMERIC);
                options.setMask("máscara");
                options.textTransform = TextFieldOptions.TextTransform.UPPER_CASE;
                options.required = true;
                options.setReadOnly(true);
                //options.dependentFields = ""; --> cómo funciona
                options.setDefaultValue("abc");
                options.hint = "Escriba cualquier texto";
                options.setSize(24);
                options.mode = ControlOptions.Mode.EDIT;
                options.setSQLConnection(ControlOptions.SQLConnection.REPORT);
                options.setSQL("some sql sentence");
                dynaform.addTextField(options);

                DropDownOptions options2 = new DropDownOptions();
                options2.fieldName = "myDropdown";
                options2.label = "seleccione un país";
                options2.required = true;
                options2.setSQL("some sql sentence for this dropdown");
                options2.addDependentField("myText");

                options2.addOption("Argentina", "arg");
                options2.addOption("Bolivia", "bol");
                options2.addOption("Brasil", "bra");
                dynaform.addDropDown(options2);

                TextAreaOptions options3 = new TextAreaOptions();
                options3.fieldName = "txtComentario";
                options3.label = "Su comentario";
                options3.setSize(20, 10);
                dynaform.addTextArea(options3); 

                PasswordOptions options4 = new PasswordOptions(); 
                options4.fieldName = "myPassword"; 
                options4.setMaxLength(13);
                options4.setSize(8);          
                dynaform.addPassword(options4);

                SuggestOptions options5 = new SuggestOptions();
                options5.fieldName = "mySuggest";
                options5.setSaveSelectedOptionAs(SuggestOptions.SaveSelectedOptionAs.VALUE);
                options5.setMaxResults(3);
                options5.setShowNoResultsMessage(true);
                options5.setSQL("select ID from TABLAX");
                options5.enableStoreNewEntry("TABLAX", "ID", SuggestOptions.StoreNewEntryPrimaryKeyType.INTEGER);
                dynaform.addSuggest(options5);

		System.out.println("----fin..");
	}

}