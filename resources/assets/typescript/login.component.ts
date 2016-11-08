import { Component, OnInit }      from '@angular/core';

import { FormBuilder, FormGroup } from '@angular/forms';


@Component({
  selector: 'login',
  templateUrl: 'templates/login.component.html'
})
export class LoginComponent {
	loginForm : FormGroup;

	constructor(fb: FormBuilder){
		this.loginForm = fb.group({
			
		});
	}

}


