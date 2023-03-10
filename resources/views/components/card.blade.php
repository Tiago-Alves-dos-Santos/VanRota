<div class="card">
    <!-- Simplicity is the consequence of refined emotions. - Jean D'Alembert -->
    <div class="card-header">
      {{ $titulo }}
    </div>
    <div class="card-body">
      {{ $slot }}
    </div>
    @if (!empty($titulo_footer))
    <div class="card-footer text-muted">
        {{ $titulo_footer }}
    </div>
    @endif
</div>
