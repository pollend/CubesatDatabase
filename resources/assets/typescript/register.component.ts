import { Component, OnInit }      from '@angular/core';

import { FormBuilder, FormGroup } from '@angular/forms';

@Component({
  selector: 'register',
  templateUrl: 'templates/register.component.html'
})
export class RegisterComponent {
	registerForm : FormGroup;

	private _user_url = '/auth/';


	constructor(fb: FormBuilder){
		this.registerForm = fb.group({
			'name' :'',
			'email-address' : '',
			'password' : '',
			're-type-password' : ''
		});
	}

	submitForm(value: any):void{
		console.log('test');
	}
}


