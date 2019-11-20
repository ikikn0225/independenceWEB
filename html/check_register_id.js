const id = document.getElementById('chk_id1')
const email = document.getElementById('email')
const password = document.getElementById('password_1')
const form = document.getElementById('form')
const id_check = document.getElementById('id_check');
const email_check = document.getElementById('email_check');
const pw_check = document.getElementById('pw_check');

//아이디 정규식
	var idJ = /^[a-z0-9]{4,12}$/;
	// 비밀번호 정규식
	var pwJ = /^[A-Za-z0-9]{4,20}$/;
	// 이메일 검사 정규식
	var mailJ = /^[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*@[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*.[a-zA-Z]{2,3}$/i;


form.addEventListener('submit', (e) =>  {
  let messages = []
  let messages_id = []
  let messages_email = []

  //아이디 정규식 체크
  if(id.value.length <= 4) {
    messages_id.push('4자리 이상의 아이디를 입력해주세요.')
  }

  if(id.value.length >= 20) {
    messages_id.push('20자리 이하의 아이디를 입력해주세요.')
  }

  if(!idJ.test(id.value)) {
    messages_id.push('a~z, 0~9로 시작하는 4~20자리를 입력해주세요.')
  }

  if(messages_id.length > 0) {
    e.preventDefault()
    id_check.innerText = messages_id.join(', ')
  }

  //이메일 정규식 체크
  if(!mailJ.test(email.value)) {
    messages_email.push('이메일 형식을 지켜주세요.')
  }

  if(messages_email.length > 0) {
    e.preventDefault()
    email_check.innerText = messages_email.join(', ')
  }


//비밀번호 정규식 체크
  if(password.value.length <= 4) {
    messages.push('5자리 이상의 비밀번호를 입력해주세요.')
  }

  if(password.value.length >= 12) {
    messages.push('12자리 이하의 비밀번호를 입력해주세요.')
  }

  if(!pwJ.test(password.value)) {
    messages.push('A~Z, a~z, 0~9로 시작하는 4~12자리를 입력해주세요.')
  }

  if(messages.length > 0) {
    e.preventDefault()
    pw_check.innerText = messages.join(', ')
  }
})
