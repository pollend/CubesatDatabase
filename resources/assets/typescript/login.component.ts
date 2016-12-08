import { Component, OnInit }      from '@angular/core';
import { Router } from '@angular/router';

import { FormBuilder, FormGroup } from '@angular/forms';
import {UserService} from "./services/user-service";

@Component({
  selector: 'login',
  templateUrl: 'templates/login.component.html',
  providers: []
})
export class LoginComponent {
	loginForm : FormGroup;
	errors:  any;
	
	constructor(private userService: UserService,private router: Router,fb: FormBuilder){

		this.loginForm = fb.group({
			'email' : '',
			'password' : ''
		});
	}

	login():void{
		let temp;
		this.userService.login(this.loginForm.value).subscribe( 
			(resp : any) => {
				this.router.navigate(['/']);
			},(error : any) => {
				this.errors = error;
			});
	}

}


