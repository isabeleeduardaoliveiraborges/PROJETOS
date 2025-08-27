function Formulario(){
    function cadastrarUsuario(e){
        e.preventDefault()
        console.log('usuario cadastrado')
    }
  return(
  <div>
    <h1>cadastro</h1>
        <form onSubmit={cadastrarUsuario}>
        <div>
            <input type="text" placeholder="digite seu nome"/>
        </div>
        <div>
        <input type="submit" value="cadastrar"/>
        </div>
        </form>

  </div>
  )
}

export default Formulario
 