<footer class="site-footer">
    <div class="container">
        <div class="footer-content">
            <p>&copy; {{ date('Y') }} {{ config('app.name', 'Desole') }}. Todos los derechos reservados.</p>
            <p>
                <a href="{{ url('/aviso-privacidad') }}">Aviso de privacidad</a> •
                <a href="{{ url('/terminos') }}">Términos</a>
            </p>
        </div>
    </div>
</footer>
