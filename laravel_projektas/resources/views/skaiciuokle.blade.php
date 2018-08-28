<h1>Skaiciuokle</h1>

<!-- Route funkcija sugeneruoja route'o actiona automatiskai pagal jo name -->
<form method="POST" action="{{ route('suma') }}">
	<!-- Saugumo sumetimais laravel visada reikalingas sitas uzrasas -->
	{{ csrf_field() }}
	<input type="text" name="x">
	<input type="text" name="y">
	<input type="submit" >
</form>