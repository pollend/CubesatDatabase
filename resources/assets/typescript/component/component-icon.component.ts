// Exact copy except import UserService from core
import { Component, OnInit }      from '@angular/core';
import { FormBuilder, FormGroup,FormArray } from '@angular/forms';

@Component({
  selector: 'component-icon-component',
  templateUrl: 'templates/component-icon.component.html'
})
export class ComponentIconComponent {
	constructor(private  fb: FormBuilder){
	}

}


