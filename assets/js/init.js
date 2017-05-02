(function($){
  $(function(){

    $('.button-collapse').sideNav();

    $(document).ready(function(){
      // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
      $('.modal').modal();
    });

    $('select').material_select();

    $('.datepicker').pickadate({
      container: 'body',
      // Traduções:
      monthsFull: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
      monthsShort: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
      weekdaysFull: ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'],
      weekdaysShort: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sab'],
      today: 'Hoje',
      clear: 'Limpar',
      close: 'Fechar',
      labelMonthNext: 'Próximo mês',
      labelMonthPrev: 'Mês anterior',
      labelMonthSelect: 'Selecione um mês',
      labelYearSelect: 'Selecione um ano',

      selectMonths: true, // Creates a dropdown to control month
      selectYears: 20, // Creates a dropdown of 15 years to control year
      format: 'dd/mm/yyyy',
      formatSubmit: 'dd/mm/yyyy'
    });
    // Faz o botão de cancelar apagar os dados do form
    $("button[type='reset']").on('click', function(){
      this.form.reset(); // forcing reset event
      Materialize.updateTextFields(); //updating labels from inputs
    });
    // Máscaras
    $('#cpfCliente').mask('000.000.000-00', {reverse: true});
    $('#telCliente').mask('(00) 0000-00009');
    $('#celCliente').mask('(00) 00000-0000');
    // Máscaras temporárias:
    $('#cpf').mask('000.000.000-00', {reverse: true});
    $('#telefone').mask('(00) 0000-00009');
    $('#celular').mask('(00) 00000-0000');

    $("#nome").autocomplete({
      minLength: 1,
      source: '../pesquisa.php',
      focus: function (event, ui) {
        $("#nome").val(ui.item.nome);
        return false;
      },
      select: function (event, ui) {
        $("#nome").val(ui.item.nome);
        $("#nome-h").val(ui.item.nome);
        $("#id_cliente").html(ui.item.id_cliente);


        return false;
      }
    })
    .autocomplete("instance")._renderItem = function (ul, item) {
      return $("<li>")
      .append("<div>" + "Nome: " + item.nome + "<br>" + "Id: " + item.id_cliente + "</div>")
      .appendTo(ul);
    };

  }); // end of document ready
})(jQuery); // end of jQuery name space
