import {Component, OnInit, Input, Output, OnChanges, EventEmitter,ElementRef} from '@angular/core';
import { FormBuilder, FormGroup, FormControl } from '@angular/forms';



@Component({
    selector: 'markdown-editor',
    template: '<textarea  [formControl]="form_entry"></textarea>',
     host: {
    	'(document:click)': 'updateText()',
  	}
})

export class MarkdownEditorComponent implements OnInit{ 
	private codeMirror : any;

	@Input()
	form_entry: FormControl;
	

	constructor(private codeView:ElementRef){}

	ngOnInit() {

		let html_editor = {lblPreview : 'Markdown', lblCodeview: 'Markdown'};
		

		this.codeMirror = UIkit.htmleditor($(<HTMLElement>this.codeView.nativeElement).find("textarea"), html_editor);
		this.codeMirror.enableMarkdown();
		// this.codeMirror = $(<HTMLElement>this.codeView.nativeElement).find(".CodeMirror")[0]["CodeMirror"];
		this.form_entry.registerOnChange(()=>{
			if(this.form_entry.value != this.codeMirror.editor.getValue())
				this.codeMirror.editor.setValue(this.form_entry.value);
		});
		
		//this.form_entry.setValue()
	
	}	
	updateText(){
		this.form_entry.setValue(this.codeMirror.editor.getValue());
	}
}

