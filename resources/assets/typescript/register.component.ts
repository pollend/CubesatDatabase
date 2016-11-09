import { Component, OnInit }      from '@angular/core';

import { FormBuilder, FormGroup } from '@angular/forms';

import {UserService} from "./services/user-service";

@Component({
  selector: 'register',
  templateUrl: 'templates/register.component.html',
  providers: []
})
export class RegisterComponent {
	registerForm : FormGroup;

	constructor(private userService: UserService, fb: FormBuilder){
		this.registerForm = fb.group({
			'name' :'',
			'email-address' : '',
			'password' : '',
			're-type-password' : ''
		});
	}

	submitForm():void{
		this.userService.register(this.registerForm.value);
		console.log('test');
	}
}


