function showPassword(bool)
{
    if(bool)
    {
        $('input[name="password"]').attr('type', 'text')
    }
    else
    {
        $('input[name="password"]').attr('type', 'password')
    }
}