function posta(){
    var nome = login.nome.value;
    console.log(nome);
}
function like(){
    alert("Obrigado pelo like");
}
function logar(){
    var email = logon.correio.value;
    var senha = logon.password.value;
    if(email == "" && senha == ""){
        alert("Há campos vazios, preencha-os");
    }else{
        alert(email);
    }
}
/*As funções "foca" tem como ideia modificar a borda da caixa de texto*/
function focan(){
    document.getElementById("nome").style.borderColor= "#DAA520";
}
function focae(){
    document.getElementById("email").style.borderColor= "#DAA520";
}
function focai(){
    document.getElementById("anos").style.borderColor= "#DAA520";
}
function focas(){
    document.getElementById("senha").style.borderColor= "#DAA520";
}
/*As funções "sai" realizam o oposto das funções "foca" retornando as bordas para sua cor original*/
function saii(){
    document.getElementById("anos").style.borderColor= "#000000";
}
function saie(){
    document.getElementById("email").style.borderColor= "#000000";
}
function sain(){
    document.getElementById("nome").style.borderColor= "#000000";
}
function sais(){
    document.getElementById("senha").style.borderColor= "#000000";
}
/*As funções abaixo tem com foco mostrar o que é dito nas cartas ao se colocar o mouse sobre elas*/
function oracle(){
    var escreva= document.getElementById("explica");
    escreva.innerHTML = "Harpie Oracle<br>This card's name becomes Harpie Lady while on the field or in the GY. You can only use each of these effects of Harpie Oracle once per turn.<br>● If you control a Level 5 or higher Harpie monster: You can Special Summon this card from your hand.<br>● If this card is Normal or Special Summoned: You can add 1 Spell/Trap from your GY to your hand, that specifically lists the card Harpie Lady Sisters in its text, during the End Phase of this turn.<br>ATK/ 1300 DEF/ 1400"
}
function medium(){
    var escreva= document.getElementById("explica");
    escreva.innerHTML = "Harpie Channeler<br>You can discard 1 Harpie card; Special Summon 1 Harpie monster from your Deck in face-up Defense Position, except Harpie Channeler. You can only use this effect of Harpie Channeler once per turn. While you control a Dragon-Type monster, this card's Level becomes 7. This card's name becomes Harpie Lady while it is on the field or in the Graveyard.<br>ATK/ 1400 DEF/ 1300";
}
function harpist(){
    var escreva= document.getElementById("explica");
    escreva.innerHTML = "Harpie Harpist<br>This card's name becomes Harpie Lady while it is on the field or in the Graveyard. You can only use each of these effects of Harpie Harpist once per turn.<br>● When this card is Normal Summoned: You can target 1 Winged Beast-Type monster you control (other than this card) and 1 face-up monster your opponent controls; return them to the hand.<br>● During the End Phase, if this card is in the Graveyard because it was sent there this turn: You can add 1 Level 4 Winged Beast-Type monster with 1500 or less ATK from your Deck to your hand.<br>ATK/ 1700 DEF/ 600";
}
function perfumist(){
    var escreva= document.getElementById("explica");
    escreva.innerHTML = "Harpie Perfumist<br>This card's name becomes Harpie Lady while on the field or in the GY. If this card is Normal or Special Summoned: You can add 1 Spell/Trap from your Deck to your hand that specifically lists the card Harpie Lady Sisters in its text. If you controlled a Level 5 or higher Harpie monster when you activated this effect, you can also add a second such card, with a different name from the first. You can only use this effect of Harpie Perfumer once per turn.<br>ATK/ 1400 DEF/ 1300";
}
function harpie1(){
    var escreva= document.getElementById("explica");
    escreva.innerHTML = "Harpie Lady 1<br>(This card's name is always treated as Harpie Lady.)<br>All WIND monsters gain 300 ATK.<br>ATK/ 1300 DEF/ 1400";
}
function book(){
    var escreva= document.getElementById("explica");
    escreva.innerHTML = "Book of moon<br>Target 1 face-up monster on the field; change that target to face-down Defense Position.";
}
function egotist(){
    var escreva= document.getElementById("explica");
    escreva.innerHTML = "Elegant Egotist<br>If Harpie Lady is on the field: Special Summon 1 Harpie Lady or Harpie Lady Sisters from your hand or Deck.";
}
function nest(){
    var escreva= document.getElementById("explica");
    escreva.innerHTML = "Swallow's Nest<br>Tribute 1 face-up Winged Beast-Type monster; Special Summon 1 Winged Beast-Type monster from your Deck with the same Level the Tributed monster had on the field.";
}
function rest(){
    var escreva= document.getElementById("explica");
    escreva.innerHTML = "Haripe's Feather Rest<br>Target 3 Harpie Lady and/or Harpie Lady Sisters in your GY; shuffle them into the Deck, then draw 1 card. If you controlled a Level 5 or higher Harpie monster when you activated this effect, draw 2 cards instead. For the rest of this turn after this card resolves, you cannot Special Summon monsters, except WIND monsters. You can only activate 1 Harpies Feather Rest per turn.";
}
function tufao(){
    var escreva= document.getElementById("explica");
    escreva.innerHTML = "Mystical Space Typhoon<br>Target 1 Spell/Trap on the field; destroy that target.";
}
function slash(){
    var escreva= document.getElementById("explica");
    escreva.innerHTML = "Cyber Slash Harpie Lady<br>For this card's Synchro Summon, you can treat 1 Harpie monster you control as a Tuner. This card's name becomes Harpie Lady while on the field or in the GY. When a Spell/Trap Card or effect is activated (Quick Effect): You can target 1 monster your opponent controls or 1 Harpie monster you control; return it to the hand. You can only use this effect of Cyber Slash Harpie Lady once per turn.<br>ATK/ 2600 DEF/ 1400";
}
function roach(){
    var escreva= document.getElementById("explica");
    escreva.innerHTML = "Steelswarm Roach<br>During either player's turn, when a Level 5 or higher monster would be Special Summoned: You can detach 1 Xyz Material from this card; negate the Special Summon, and if you do, destroy it.<br>ATK/ 1900 DEF/ 0";
}
function patriarc(){
    var escreva= document.getElementById("explica");
    escreva.innerHTML = "Number 18: Heraldry Patriarch<br>Once per Chain, during either player's turn, if 2 or more monsters with the same name are on the field: You can detach 1 Xyz Material from this card; choose 1 monster among those with the same name, and destroy all other monsters with that name. While this card remains face-up on the field, your opponent cannot Summon monsters with the same name as any of the monster(s) chosen for this card's effect. If this card is sent to the Graveyard: You can send 2 Heraldic Beast monsters from your Deck to the Graveyard.<br>ATK/ 2200 DEF/ 2200";
}
function malevolent(){
    var escreva= document.getElementById("explica");
    escreva.innerHTML = "Numver 70: Malevolent Sin<br>Once per turn: You can detach 1 Xyz Material from this card, then target 1 monster your opponent controls; banish it until your opponent's next Standby Phase. At the end of the Damage Step, if this card attacked: You can make this card gain 300 ATK, and if you do, increase its Rank by 3.<br>ATK/ 2400 DEF/ 1200";
}
function dweller(){
    var escreva= document.getElementById("explica");
    escreva.innerHTML = "Abyss Dweller<br>While this card has a material attached that was originally WATER, all WATER monsters you control gain 500 ATK. Once per turn (Quick Effect): You can detach 1 material from this card; your opponent cannot activate any card effects in their GY this turn.<br>ATK/ 1700 DEF/ 1400";
}
function score(){
    var escreva= document.getElementById("explica");
    escreva.innerHTML = "Score The Melodious Diva<br>During damage calculation (in either player's turn), if a Melodious monster you control battles an opponent's monster: You can send this card from your hand to the Graveyard; change that opponent's monster's ATK and DEF to 0, until the end of this turn.<br>ATK/ 200 DEF/ 200";
}
function soprano(){
    var escreva= document.getElementById("explica");
    escreva.innerHTML = "Soprano The Malodious Songtress<br>When this card is Special Summoned: You can target 1 Melodious monster in your Graveyard, except Soprano the Melodious Songstress; add it to your hand. You can only use this effect of Soprano the Melodious Songstress once per turn. Once per turn: You can Fusion Summon 1 Melodious Fusion Monster from your Extra Deck, using monsters you control as Fusion Materials, including this card.<br>ATK/ 1400 DEF/ 1400";
}
function mozarta(){
    var escreva= document.getElementById("explica");
    escreva.innerHTML = "Mozarta The Melodious Maestra<br>Once per turn: You can Special Summon 1 LIGHT Fairy-Type monster from your hand. You cannot Special Summon other monsters the turn you activate this effect, except for LIGHT monsters.<br>ATK/ 2600 DEF/ 2000";
}
function sonata(){
    var escreva= document.getElementById("explica");
    escreva.innerHTML = "Sonata The Melodious Diva<br>If you control a Melodious monster, you can Special Summon this card (from your hand). While this Special Summoned card is on the field, all Fairy-Type monsters you control gain 500 ATK and DEF.<br>ATK/ 1200 DEF/ 1000";
}
function schopina(){
    var escreva= document.getElementById("explica");
    escreva.innerHTML = "Shopina The Melodious Maestra<br>Once per turn: You can target 1 LIGHT Fairy-Type monster in your Graveyard; add it to your hand. You cannot activate non-LIGHT monster effects during the turn you activate this effect.<br>ATK/ 2300 DEF/ 1700";
}
function solo(){
    var escreva= document.getElementById("explica");
    escreva.innerHTML = "Solo The Melodious Songstress<br>If your opponent controls a monster and you control no monsters, you can Special Summon this card (from your hand). When this card is destroyed by battle and sent to the Graveyard: You can Special Summon 1 Melodious monster from your Deck, except Solo the Melodious Songstress.<br>ATK/ 1600 DEF/ 1000";
}
function ostinato(){
    var escreva= document.getElementById("explica");
    escreva.innerHTML = "Ostinato<br>If you control no monsters: Fusion Summon 1 Melodious Fusion Monster from your Extra Deck, using 2 monsters from your hand and/or Deck as Fusion Material. During the End Phase of this turn, destroy the monster Fusion Summoned by this effect, and if you do, if all the Fusion Materials that were used for its Fusion Summon are in your GY, you can Special Summon all of them.";
}
function primeiro(){
    var escreva= document.getElementById("explica");
    escreva.innerHTML = "1st Movement Solo<br>If you control no monsters: Special Summon 1 Level 4 or lower Melodious monster from your hand or Deck. You can only activate 1 1st Movement Solo per turn. You cannot Special Summon monsters during the turn you activate this card, except Melodious monsters.";
}
function skill(){
    var escreva= document.getElementById("explica");
    escreva.innerHTML = "Breakthrough Skill<br>Target 1 face-up Effect Monster your opponent controls; that face-up monster your opponent controls has its effects negated until the end of this turn. During your turn, except the turn this card was sent to the Graveyard: You can banish this card from your Graveyard, then target 1 face-up Effect Monster your opponent controls; that target has its effects negated until the end of this turn.";
}
function prision(){
    var escreva= document.getElementById("explica");
    escreva.innerHTML = "Skill Prisioner<br>Target 1 card you control; this turn, when any monster effect resolves that targeted that card at activation, negate that effect. During either player's turn, except the turn this card was sent to the Graveyard: You can banish this card from your Graveyard, then target 1 card you control; this turn, when any monster effect resolves that targeted that card at activation, negate that effect.";
}
function tth(){
    var escreva= document.getElementById("explica");
    escreva.innerHTML = "Treacherous trap Hole<br>If you have no Trap Cards in your Graveyard: Target 2 monsters on the field; destroy those targets.";
}
function bloom(){
    var escreva= document.getElementById("explica");
    escreva.innerHTML = "Bloom Diva the Melodious Choir<br>Cannot be destroyed by battle or card effects, also you take no battle damage from attacks involving this card. If this card battles a Special Summoned monster, after damage calculation: You can inflict damage to your opponent equal to half the difference between the original ATK of that opponent's monster and this card, and if you do, destroy that opponent's monster.ATK/ 1000 DEF/ 2000";
}
function schuberta(){
    var escreva= document.getElementById("explica");
    escreva.innerHTML = "Schuberta the Melodious Meastra<br>During either player's turn: You can target up to 3 cards in any Graveyard(s); banish them, and if you do, this card gains 200 ATK for each. This effect can only be used once while this card is face-up on the field.<br>ATK/ 2400 DEF/ 2000";
}
function prima(){
    var escreva= document.getElementById("explica");
    escreva.innerHTML = "Bloom Prima the Melodious Choir<br>This card gains 300 ATK for each Fusion Material used for its Fusion Summon. This card can make a second attack during each Battle Phase. If this Fusion Summoned card is sent to the Graveyard: You can target 1 Melodious monster in your Graveyard; add it to your hand.<br>ATK/ 1900 DEF/ 2000";
}
/*A função "fora" serve para que quando o usuário retirar o mouse da carta, o texto que antes apareceria, suma*/
function fora(){
    var fora = document.getElementById("explica");
    fora.innerHTML = "";
}
function desloga(){
    alert("Você foi deslogado");
}