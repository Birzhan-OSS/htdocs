<div class="xhtml_form login-component" >
    <form action="{{url}}" method="post" id="{{name}}" name="{{name}}">
        <input type="hidden" class="global" name="{{name}}_sent" value="1">
        {{#if message.error}}
            <div class="xhtml_form_error">{{message.error}}</div>
        {{/if}}
        <div class="input-container">
            
				<div class="icon_border"> <i class="fa fa-user fa-2x icon" aria-hidden="true"></i> </div>
				<input type="text" class="input-field" name="login" id="login" placeholder="Логин" autofocus="autofocus"{{#if disableAutocomplete}} autocomplete="off"{{/if}}>
            {{#if fieldMessages.login}}
                <div class="form-error">
                    {{fieldMessages.login}}
                </div>
            {{/if}}
        </div>
        <div class="input-container">
            
				<div class="icon_border"><i class="fa fa-lock fa-2x icon" aria-hidden="true"></i></div>
				<input type="password" class="input-field" name="password" placeholder="Пароль" id="password"{{#if disableAutocomplete}} autocomplete="off"{{/if}}>
            {{#if fieldMessages.password}}
                <div class="form-error">
                    {{fieldMessages.login}}
                </div>
            {{/if}}
        </div>
        <div class="form-toolbar"><input type="submit" id="connect" name="connect" disabled="disabled" class="disabled" value="ВОЙТИ"></div>
    </form>
</div>