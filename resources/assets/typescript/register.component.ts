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
	errors:  any;
	constructor(private userService: UserService, fb: FormBuilder){
		this.registerForm = fb.group({
			'name' :'',
			'email' : '',
			'password' : '',
			'password_confirmation' : ''
		});	
	}

	submitForm():void{
		let a;
		let b;
		this.userService.register(this.registerForm.value)
		.subscribe(
                       heroes => a = heroes,
                       error =>  this.errors = <any>error);
	}
}


