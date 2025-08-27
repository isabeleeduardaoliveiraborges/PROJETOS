function Evento({numero}){
 function MeuEvento(){
    console.log(`Opa! fui ativado! ==> ${numero}`)
    }
    return(
        <div> 
          <p> clique </p>
          <button onClick={MeuEvento}>Ativar</button>
      </div>
    )

}

export default Evento