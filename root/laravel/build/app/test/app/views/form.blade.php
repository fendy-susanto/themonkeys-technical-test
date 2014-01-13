@extends('layout')

@section('content')
    
	{{ Form::open(array('url' => '/')) }}


		@if (Session::has('errors'))

			<div class="error">Error occured</div>

			<hr />

		@endif


		@if (Session::has('message'))

			<h2>{{ Session::get('message') }}</h2>

			<hr />

		@endif


		<p>
		
			{{ Form::label('firstname', 'Firstname * :') }} 

			{{ Form::text('firstname', null, array( 'required' => 'required' )) }}

		</p>

		<p>

			{{ Form::label('surname', 'Surname * :') }} 

			{{ Form::text('surname', null, array( 'required' => 'required' )) }}

		</p>

		<p class="error">{{ $errors->first('email') }}</p>

		<p>

			{{ Form::label('email', 'Email * :') }} 

			{{ Form::text('email', null, array( 'required' => 'required' )) }}

		</p>

		<p>

			{{ Form::label('day_time_contact_number', 'Day time contact number * :') }} 

			{{ Form::text('day_time_contact_number', null, array( 'required' => 'required' )) }}

		</p>

		<p>

			{{ Form::label('address', 'Address * :') }} 

			{{ Form::text('address', null, array( 'required' => 'required' )) }}

		</p>

		<p>

			{{ Form::label('suburb', 'Suburb * :') }} 

			{{ Form::text('suburb', null, array( 'required' => 'required' )) }}

		</p>

		<p>

			{{ Form::label('state', 'State * :') }} 

			{{ Form::select('state', 

					array( 
						'' => '---', 
						'ACT' => 'ACT', 
						'NSW' => 'NSW', 
						'NT' => 'NT', 
						'QLD' => 'QLD', 
						'SA' => 'SA', 
						'TAS' => 'TAS', 
						'VIC' => 'VIC', 
						'WA' => 'WA'
					), 
					'---',
					array( 'required' => 'required' )

				) }}

		</p>

		<p>

			{{ Form::label('postcode', 'Postcode * :') }} 

			{{ Form::text('postcode', null, array( 'required' => 'required' )) }}

		</p>

		<p>

			{{ Form::label('enquiry_type', 'Enquiry Type * :') }} 

			{{ Form::select('enquiry_type', 

					array( 
						'' => '---', 
						'General enquiry' => 'General enquiry', 
						'Product feedback or enquiry' => 'Product feedback or enquiry', 
						'Product complaint' => 'Product complaint'
					), 
					'---',
					array( 'required' => 'required' )

				) }}

		</p>

		<p class="error">{{ $errors->first('product_name') }}</p>

		<p>

			{{ Form::label('product_name', 'Product Name :') }} 

			{{ Form::text('product_name', null ) }}

		</p>

		<p class="error">{{ $errors->first('product_size') }}</p>

		<p>

			{{ Form::label('product_size', 'Product Size :') }} 

			{{ Form::text('product_size', null ) }}

		</p>

		<p class="error">{{ $errors->first('use_by_date') }}</p>

		<p>

			{{ Form::label('use_by_date', 'Use By Date :') }} 

			{{ Form::text('use_by_date', null ) }}

		</p>

		<p class="error">{{ $errors->first('batch_code') }}</p>

		<p>

			{{ Form::label('batch_code', 'Batch Code :') }} 

			{{ Form::text('batch_code', null ) }}

		</p>

		<p class="error">{{ $errors->first('enquiry') }}</p>

		<p>

			{{ Form::label('enquiry', 'Enquiry :') }} 

			{{ Form::textarea('enquiry', null ) }}

		</p>

		<p>{{ Form::submit('Submit') }}</p>


	{{ Form::close() }}

@stop