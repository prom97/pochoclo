export default function PrimaryButton({ className = '', disabled, children, ...props }) {
    return (
        <button
            {...props}
            className={
                `flex justify-center text-center px-4 py-2 bg-red-600 hover:bg-red-800 text-xl text-white rounded transition duration-150 easy-in-out ${
                    disabled && 'opacity-25'
                } ` + className
            }
            disabled={disabled}
        >
            {children}
        </button>
    );
}
