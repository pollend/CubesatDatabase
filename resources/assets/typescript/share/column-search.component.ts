import {Component, Input, Output, OnChanges, EventEmitter} from '@angular/core';
import { FormBuilder, FormGroup, FormArray } from '@angular/forms';

@Component({
  selector: 'column-search',
  templateUrl: 'templates/list-search.component.html'
})

export class ColumnSearchComponent{
	simpleSearchForm : FormGroup;
	advanceSearchForm : FormGroup;

	@Input()
	columns : string[];

	@Output() 
	on_search: EventEmitter<string> = new EventEmitter<string>();

	constructor(private fb: FormBuilder){
		this.simpleSearchForm = this.initSearchEntry();

		this.advanceSearchForm = fb.group({
			'searches' : fb.array([
				this.initSearchEntry()
			])
		});
	}

	initSearchEntry(){
		return  this.fb.group({
			'search' :'',
			'column' :''
		});
	}

	addSearchEntry(){
		const control = <FormArray>this.advanceSearchForm.controls['searches'];
		control.push(this.initSearchEntry());
	}

	removeEntry(entry : FormGroup): void
	{
		const control = <FormArray>this.advanceSearchForm.controls['searches'];
		for (var i = control.length - 1; i >= 0; i--) {
			if(control[i] == entry)
			{
				control.removeAt(i);
			}
		}
	}

	simpleSearch():void{

	}

	advanceSearch(): void{

	}
}