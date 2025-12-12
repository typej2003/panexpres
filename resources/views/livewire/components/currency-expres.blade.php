<button class="dropdown-button">
    {{ ($currencyValue == '$' ? 'USD': 'Bs') }} <i class="fas fa-angle-down" style="margin-left: 5px;"></i>
</button>
<div class="dropdown-content">
    <a class="dropdown-item" href="/changeCurrency/{{'Bs'}}">Bs</a>
    <a class="dropdown-item" href="/changeCurrency/{{'$'}}">USD</a>
</div>
    
