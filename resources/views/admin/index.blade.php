@extends('theme.default')

@section('content')

<!-- Icon Cards-->
<div class="row">
	<div class="col-xl-3 col-sm-6 mb-3">
		<div class="card text-white bg-primary o-hidden h-100">
			<div class="card-body">
				<div class="card-body-icon">
					<i class="fas fa-book-open"></i>
				</div>
				<div class="ml-5 text-right">{{ $books }} عدد الكتب</div>
			</div>
			
		</div>
	</div>
	<div class="col-xl-3 col-sm-6 mb-3">
		<div class="card text-white bg-warning o-hidden h-100">
			<div class="card-body">
				<div class="card-body-icon">
					<i class="fas fa-folder"></i>
				</div>
				<div class="ml-5 text-right">{{ $categories }} عدد التصنيفات</div>
			</div>
			
		</div>
	</div>
	<div class="col-xl-3 col-sm-6 mb-3">
		<div class="card text-white bg-success o-hidden h-100">
			<div class="card-body">
				<div class="card-body-icon">
					<i class="fas fa-pen-fancy fa-flip-horizontal"></i>
				</div>
				<div class="ml-5 text-right">{{ $authors }} عدد المؤلفين</div>
			</div>
		
		</div>
	</div>
	<div class="col-xl-3 col-sm-6 mb-3">
		<div class="card text-white bg-danger o-hidden h-100">
			<div class="card-body">
				<div class="card-body-icon">
					<i class="fas fa-fw fa-table"></i>
				</div>
				<div class="ml-5 text-right">{{ $publishers }} عدد الناشرين</div>
			</div>
			
		</div>
	</div>
</div>
@endsection