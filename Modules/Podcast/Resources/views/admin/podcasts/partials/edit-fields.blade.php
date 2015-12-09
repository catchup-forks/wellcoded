<div class="box-body">

    {!! Form::i18nInput('title', 'Title', $errors, $lang, $podcast) !!}

    {!! Form::i18nTextarea('description', 'Description', $errors, $lang, $podcast) !!}

    {!! Form::i18nInput('tags', 'Tags', $errors, $lang, $podcast) !!}

</div>
