import {Component, Input, Output, OnChanges, EventEmitter} from '@angular/core';
import { FormBuilder, FormGroup, FormArray, FormControl } from '@angular/forms';
import { Http, Response, Headers, RequestOptions } from '@angular/http';

import {Observable}     from 'rxjs/Rx';


@Component({
  selector: 'auto-complete',
  templateUrl: 'templates/auto-complete.html'
})
export class AutoCompleteComponent{

	@Input()
	formControl: FormControl;
	@Input()
	source : string;
	@Input()
	minLength : number;
	@Input()
	title: string;

	// @Input()
	// delay : number;

	value : any;
	constructor(private http: Http){}

	onEntryChange(value: string)
	{
		if(this.minLength < value.length)
		{
			let headers = new Headers({ 'Content-Type': 'application/json' });
			let options = new RequestOptions({ headers: headers });
			let payload = {search : value};

			this.http.post(this.source,payload,options).map(this.extractData).subscribe(
				(payload: any) => {
					this.value = payload;
				}
			);
		}
	}
	clear()
	{
		this.value = false;

	}

	onSubmit(value:string,field:any)
	{
		field["value"]  = value;
		this.value = false;
	}

	private extractData(res: Response) {
		let body = res.json();
		return body || { };
	}




}