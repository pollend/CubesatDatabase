import {Component} from 'angular2/core';
 
@Component({
    selector: 'home',
    template: `
    <h1>derp</h1>
    <a class="button-sm">small</a>
    <a class="button-md">medium</a>
    <a class="button-lg">large</a>

	<table class="table">
	  <thead>
	    <tr>
	      <th>Header content 1</th>
	      <th>Header content 2</th>
	       <th>Header content 1</th>
	      <th>Header content 2</th>
	    </tr>
	  </thead> 
	  <tbody>
	    <tr>
	      <td>Body content 1</td>
	      <td>Body content 2</td>
	      <td>Body content 1</td>
	        <td>Body content 1</td>
	    </tr>
	    <tr>
	      <td>Body content 1</td>
	      <td>Body content 2</td>
	      <td>Body content 1</td>
	        <td>Body content 1</td>
	    </tr>
	    <tr>
	      <td>Body content 1</td>
	      <td>Body content 2</td>
	       <td>Body content 1</td>
	        <td>Body content 1</td>
	    </tr>
	    <tr>
	      <td>Body content 1</td>
	      <td>Body content 2</td>
	      <td>Body content 1</td>
	        <td>Body content 1</td>
	    </tr>
	    <tr>
	      <td>Body content 1</td>
	      <td>Body content 2</td>
	      <td>Body content 1</td>
	        <td>Body content 1</td>
	    </tr>
	  </tbody>
	</table>

	<div class="pagination">
	  <ul>
	    <li class="page-prev"><a href="javascript:void(0)">Prev</a></li>
	    <li>
	      <ul>
	        <li><a href="javascript:void(0)">1</a></li>
	        <li><a href="javascript:void(0)">2</a></li>
	        <li><a href="javascript:void(0)">3</a></li>
	        <li><a href="javascript:void(0)">4</a></li>
	        <li><a href="javascript:void(0)">5</a></li>
	        <li><a href="javascript:void(0)">6</a></li>
	        <li><a href="javascript:void(0)">7</a></li>
	      </ul>
	    </li>
	    <li class="page-next"><a href="javascript:void(0)">Next</a></li>
	  </ul>
	</div>

	<button type="button" class="btn btn-default navbar-btn">Sample</button>
    `
})

export class HomeComponent { }
