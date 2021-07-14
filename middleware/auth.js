export default async function (ctx) {
  try{
    await ctx.$axios.get('/api/auth');
    return true;
  }
  catch(e){
    return ctx.redirect('/admin')
  }
}
