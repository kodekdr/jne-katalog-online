<h1>login</h1>

<div style="color: red;"><?=$this->session->flashdata('error'); ?></div>
<form action="login-process" method="post">
    <input name="email" type="email" placeholder="email">
    <input name="password" type="password" placeholder="password">
    <button>login</button>
</form>