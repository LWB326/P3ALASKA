<?php	
	namespace MicroCMS\Form\Type;

	use Symfony\Component\Form\AbstractType;
	use Symfony\Component\Form\FormBuilderInterface;
	use Symfony\Component\Form\Extension\Core\Type\TextType;
	use Symfony\Component\Form\Extension\Core\Type\TextareaType;

?>
	<script type="text/javascript" src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=jmu97uwd4fm4o0pqaipxjgboqu3ehrwpzugloptbuvqkfxw6"></script> 
	<script>tinymce.init({ selector:'textarea' });</script>
	<script type="text/javascript"></script>
<?php
	
	class ArticleType extends AbstractType
	{
		public function buildForm(FormBuilderInterface $builder, array $options)
		{
			$builder
				->add('title', TextType::class)
				->add('content', TextareaType::class , array('required'=>false));
		}

		public function getName()
		{
			return 'article';
		}
	}